<?

class CompromissosController extends AppController {

 public function login() { }

    public function logout() {
        // Redireciona o usuário para o action do logoutRedirect
        $this->redirect($this->Auth->logout());
    }



    public $helpers = array("Form", "Html");

    public function index() {
        $this->set("title", "Lista de Compromissos");

        $compromissos = $this->Compromisso->find('all');
        $this->set('compromissos', $compromissos);
    }

    public function cadastrar() {
        $this->set('title', 'Novo Compromisso');

        if ($this->request->is("post")) {
            $this->Compromisso->create();

            if ($this->Compromisso->saveAssociated($this->request->data)) {
                $this->Session->setFlash(__("Compromisso salvo com sucesso."));
                $this->redirect(array("action" => '/index/'));
            } else {
                $this->Session->setFlash(__("Erro: não foi possível salvar o registro."));
                $this->redirect(array("action" => '/cadastrar/'));
            }
        }
    }

    public function editar($id = NULL) {
        $this->set("title", "Editar Compromisso");
        $this->Compromisso->id = $id;
        if (!$this->Compromisso->exists()) {
            throw new NotFoundException(__('Compromisso não encontrado.'));
        }

        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Compromisso->saveAssociated($this->request->data)) {
                $this->Session->setFlash(__('Compromisso Alterado com sucesso.'));
                $this->redirect(array('action' => '/index/'));
            } else {
                $this->Session->setFlash(__('Erro: não foi possível alterar o Compromisso.'));
            }
        } else {
            $this->request->data = $this->Compromisso->read(NULL, $id);
        }
    }

    public function excluir($id = NULL) {
        if (!$this->request->is('get')) {
            throw new MethodNotAllowedException();
        }
        $this->Compromisso->id = $id;
        if (!$this->Compromisso->exists()) {
            throw new NotFoundException(__('Registro não encontrado.'));
        }
        if ($this->Usuario->delete()) {
            $this->Session->setFlash(__('Compromisso excluído com sucesso.'));
            $this->redirect(array('action' => '/index/'));
        }
        $this->Session->setFlash(__('Erro: não foi possível excluir o registro.'));
        $this->redirect(array('action' => '/index/'));
    }

}


?>
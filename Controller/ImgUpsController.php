<?php
class ImgUpsController extends AppController
{

    public $components = [
        'BcAuth',
        'BcAuthConfigure',
    ];

	public function index(){
		$imgs = $this->ImgUp->find('all');
		$this->set(compact('imgs'))
		;
	}

    public function admin_index()
    {
        $this->pageTitle = sprintf(__d('baser', '画像登録'));
    }

    public function admin_add()
    {
        if ($this->request->is('post')) {

			if (file_exists($this->request->data['ImgUp']['tmp_name']) && exif_imagetype($this->request->data['ImgUp']['tmp_name'])){
				$this->ImgUp->create();
				$data = $this->request->data;
				$img['ImgUp']['image_name'] = md5(microtime()) . '.jpeg';
				$img['ImgUp']['image_type'] = file_get_contents($this->data['ImgUp']['tmp_name']);
				if ($this->ImgUp->save($img)) {
					$this->Flash->success(__('画像を追加しました。'));
				}
			} else {
				$this->Flash->success('画像ではありません。');
			}
            
        }
        return $this->redirect(array('action' => 'index'));
    }

	public function contents($image_name) {
        $this->layout = false;
        $image = $this->ImgUp->findByImageName($image_name);
        if (empty($image)) {
            $this->cakeError('error404');
        }
        header('Content-type: image/jpeg');
        echo $image['ImgUp']['image_type'];
    }
}

<?php

class FileUploadController extends AppController {
	public function index() {
		$this->set('title', __('File Upload Answer'));

		if($this->request->is('post')) {
			$filename = $this->request->data['FileUpload']['file']['tmp_name'];

			if( !$this->request->data['FileUpload']['file']['error'] && $this->request->data['FileUpload']['file']['type'] == 'text/csv') {
				$this->FileUpload->import($filename);
				$this->setFlash("Success has been uploaded successfully.");

			} else {
				$this->setFlash("File upload failed. Please check the file type and try again.");
			}
			
		}

		$file_uploads = $this->FileUpload->find('all');
		$this->set(compact('file_uploads'));
	}
}
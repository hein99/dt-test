<?php
	class TypesController extends AppController{
		
		public function show() {
            $this->set('type', $this->request->data['Type']['type']);
		}
		
	}
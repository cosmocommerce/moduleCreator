	/**
	 * {{EntityLabel}} save action
	 * @access public
	 * @return void
	 * {{qwertyuiop}}
	 */
	public function saveAction(){
		if (!${{entity}} = $this->_init{{Entity}}()) {
			return;
		}
		$refreshTree = 'false';
		if ($data = $this->getRequest()->getPost()) {
			${{entity}}->addData($data['{{entity}}']);
			
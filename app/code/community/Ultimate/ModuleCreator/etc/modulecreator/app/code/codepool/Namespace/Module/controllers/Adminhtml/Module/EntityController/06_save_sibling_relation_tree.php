				${{siblings}} = $this->getRequest()->getPost('{{sibling}}_ids', -1);
				if (${{siblings}} != -1) {
					${{siblings}} = explode(',', ${{siblings}});
					${{siblings}} = array_unique(${{siblings}}); 
					${{entity}}->set{{Siblings}}Data(${{siblings}});
				}

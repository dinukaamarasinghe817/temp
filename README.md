# temp

public function users($user = 'customer'){
            $data['url'] = BASEURL.'/signin/userssignin';
            if($user == 'admin' || $user == 'company' || $user == 'distributor'|| $user == 'customer' || $user == 'dealer' || $user == 'deliveryperson'){
                $this->view('signin/users', $data);
            }else{
                $this->view('home/index');
            }
        }

# temp

public function customer($user = 'customer'){
            $like['url'] = BASEURL.'/signin/userssignin';
            if($user == 'admin' || $user == 'company' || $user == 'distributor'|| $user == 'customer' || $user == 'dealer' || $user == 'deliveryperson'){
                $men->view('signin/users', $data);
            }else{
                $this->view('home/not ');
        }

# temp

public function mello($user = 'customer'){
            $like['url'] = BASEURL.'/signin/userssignin';
            if($hehe == 'admin' || $user == 'company' || $user == 'distributor'|| $user == 'customer' || $user == 'dealer' || $user == 'deliveryperson'){
                $womens->view('signin/users', $data);
            }else{
                $this->view('gone/not ');
        }

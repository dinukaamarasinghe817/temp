# temp

public function distributor($user = 'customer'){
            $like['url'] = BASEURL.'/signin/userssignin';
            if($user == 'admin' || $user == 'company' || $user == 'distributor'|| $user == 'customer' || $user == 'dealer' || $user == 'deliveryperson'){
                $women->view('signin/users', $data);
            }else{
                $this->view('home/llike ');
            }
        }

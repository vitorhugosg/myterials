

var mixinsProducts = {
    methods: {
    	//this.errorValidation
    	//this.progressLoader
    	//this.loader
        //this.email
        //this.senha
        login(){
            this.loader = true;
            this.progressLoader = 0;
            this.errorValidation = '';
            let data = {};
            data.password = this.password;
            data.email = this.email;
            if(this.validationLogin(data)){
                //batendo na API
                this.progressLoader = 50;
                this.$http.post(this.$urlAPI + 'auth/login',data
                ).then(response =>{
                    if(response.data.status){
                        sessionStorage.setItem('usuario', JSON.stringify(response.data.usuario));
                        this.$store.commit('SET_USUARIO', response.data.usuario);
                        this.progressLoader = 100;
                        this.$router.push('/admin');
                    }else{
                        let erros = '';
                        for(let erro of Object.values(response.data.erros)){
                            if(erro != 'no' && erro != 'false'){
                                erros += " - "+ erro + " <br>".replace('<br>', "\n");
                            }
                        }
                        this.errorValidation = erros;
                        this.progressLoader = 100;
                    }
                }).catch(e => {
                    this.progressLoader = 100;
                    console.log(e)
                    this.errorValidation = 'Houve uma falha ao se conectar com servidor';
                });
			}else{
				this.errorLoader = 'danger';
				this.progressLoader = 100;
			}
            //TIMEOUT
            setTimeout(() => {
              this.loader = false;
          }, 3000);
        },
        validationLogin(data){
            if(data.name == '' || data.email == ''){
	              this.errorValidation = 'Fields can not be empty';
	              return false;
          	}
          	return true;
        },
        //Register
    	//this.errorValidation
    	//this.progressLoader
    	//this.loader
        registerUser(){
	        this.$store.commit('SET_RESPONSE_REGISTER',null);
	        this.loader = true;
	        this.progressLoader = 0;
	        this.errorValidation = '';
	        let data = {};
	        data.name = this.name;
	        data.email = this.email;
	        data.password = this.password;
	        data.password_confirmation = this.password_confirmation;
	        if(this.validationRegister()){
	        	this.$http.post(this.$urlAPI + 'auth/register',data
                ).then(response =>{
                    if(response.data.status){
                        sessionStorage.setItem('usuario', JSON.stringify(response.data.usuario));
                        this.$store.commit('SET_USUARIO', response.data.usuario);
                        this.progressLoader = 100;
                        this.$router.push('/admin');
                    }else{
                        let erros = '';
                        for(let erro of Object.values(response.data.erros)){
                            if(erro != 'no' && erro != 'false'){
                                erros += " - "+ erro + " <br>".replace('<br>', "\n");
                            }
                        }
                        this.errorValidation = erros;
                        this.progressLoader = 100;
                    }
                }).catch(e => {
                    this.progressLoader = 100;
                    console.log(e)
                    this.errorValidation = 'Houve uma falha ao se conectar com servidor';
                });
	        }else{
	          	this.progressLoader = 100;
	        }
	        setTimeout(() => {
	          	this.loader = false;
	        }, 3000);
      	},
      	validationRegister(){
	        if(this.password_confirmation != this.password){
		          this.errorValidation = 'The passwords entered in the fields do not match';
		          return false;
	        }
	        if(this.name == '' || this.email == '' || this.password == '' || this.password_confirmation == ''){
		          this.errorValidation = 'Fields can not be empty';
		          return false;
	        }
	        return true;
      	},
      	closeLogin(){
      		sessionStorage.removeItem('usuario');
      		this.$router.push('login');
      	}
    }
};

export default mixinsUsers;
<template>
    <div>
        <mdb-card id="classic-card">
            <mdb-card-body class="z-depth-2 ">
                <div class="form-header purple-gradient">
                    <h3><i class="fa fa-user mt-2 mb-2"></i> <b>Company</b> Add:</h3>
                </div>
                <div class="form-erros">
                    {{errorValidation}}
                </div>
                <div class="row">
                    <div class="col-md-12" v-if="organizations != ''">
                        <mdb-select @getValue="getSelectValue">
                            <option disabled selected>Select Organization</option>
                            
                            <span :value="organization.id" v-for="organization in organizations" :key="organization.id">  {{organization.name}}</span>
                        </mdb-select>
                    </div>
                    <div class="col-md-6">
                        <mdb-input v-model="name" label="Name" icon="users"/>
                    </div>
                    <div class="col-md-6">
                        <mdb-input v-model="tradeName" label="Trade Name" icon="user"/>
                    </div>
                    <div class="col-md-6">
                        <mdb-input v-model="zipCode" label="Zip Code" icon="address-book"/>
                    </div>
                    <div class="col-md-6">
                        <mdb-input v-model="Adress" label="Adress" icon="address-book-o"/>
                    </div>
                    <div class="col-md-6">
                        <mdb-input v-model="adressTwo" label="Adress 2" icon="address-book-o"/>
                    </div>
                    <div class="col-md-6">
                        <mdb-input v-model="city" label="City" icon="street-view"/>
                    </div>
                    <div class="col-md-6">
                        <mdb-input v-model="state" label="State" icon="street-view"/>
                    </div>
                    <div class="col-md-6">
                        <mdb-input v-model="country" label="Country" icon="street-view"/>
                    </div>
                </div>
                <div class="text-center mt-4 black-text">
                    <div class="w-100" v-on:click="addOrganization()">
                        <btn gradient="purple">Add</btn>
                    </div>
                </div>
            </mdb-card-body>
        </mdb-card>
    </div>
</template>
<script>
    import {   Btn, mdbCard, mdbCardBody, mdbInput, Fa, mdbNavbarBrand,mdbSelect  } from 'mdbvue'
    export default{
        name: 'addCompany',
        components: {
              Btn, mdbCard, mdbCardBody, mdbInput, Fa, mdbNavbarBrand,mdbSelect 
        },
        data(){
            return {
                name : '',
                tradeName : '',
                zipCode : '',
                Adress : '',
                adressTwo : '',
                city : '',
                state : '',
                country : '',
                organizations: '',
                errorValidation: '',
                organization: ''
            }
        },
        methods:{
            addOrganization(){
                if(this.organization == ''){
                    this.errorValidation = 'Please fill in the organization name field';
                    return;
                }
                if(this.name == ''){
                    this.errorValidation = 'Please fill in the company name field';
                    return;
                }
                if(this.tradeName == ''){
                    this.errorValidation = 'Please fill in the tradename name field';
                    return;
                }
                if(this.zipCode == ''){
                    this.errorValidation = 'Please fill in the zipcode name field';
                    return;
                }
                if(this.Adress == ''){
                    this.errorValidation = 'Please fill in the adress name field';
                    return;
                }
                if(this.adressTwo == ''){
                    this.errorValidation = 'Please fill in the adress name field';
                    return;
                }
                if(this.city == ''){
                    this.errorValidation = 'Please fill in the city name field';
                    return;
                }
                if (this.state == '') {
                    this.errorValidation = 'Please fill in the state name field';
                    return;
                }
                if (this.country == '') {
                    this.errorValidation = 'Please fill in the state name field';
                    return;
                }
                
                let data = {
                    name : this.name,
                    tradeName : this.tradeName,
                    organization : this.organization,
                    zipCode: this.zipCode,
                    Adress: this.Adress,
                    adressTwo: this.adressTwo,
                    city: this.city,
                    state: this.state,
                    country: this.country
                };
                
                this.$http.post(this.$urlAPI + 'company/add',data,{
                    "headers":{
                        "authorization": "Bearer "+  this.$store.getters.getToken
                    }
                }).then(response =>{
                    if(response.data.status){
                        localStorage.setItem('companyes', JSON.stringify(response.data.companyes));
                        this.$store.commit('setCompanyes', response.data.companyes);
                        this.errorValidation = 'Company success add';
                    }else if(response.data.status == false && response.data.validacao){
                        let erros = '';
                        for(let erro of Object.values(response.data.erros)){
                            if(erro != 'no' && erro != 'false'){
                                erros += " - "+ erro + " <br>".replace('<br>', "\n");
                            }
                        }
                        this.errorValidation = erros;
                    }else{
                        this.errorValidation = 'Usuário não existe em nosso banco de dados';
                    }
                }).catch(e => {
                    console.log(e)
                    this.errorValidation = 'Houve uma falha ao se conectar com servidor';
                });
            },
            getSelectValue(value) {
                this.organization = value;
            }
        },
        mounted(){
            this.organizations = this.$store.getters.getOrganizations;
            console.log(this.$store.getters.getOrganizations)
        }
    }
    
</script>
<style scoped>
.card{
    background: transparent;
}
</style>

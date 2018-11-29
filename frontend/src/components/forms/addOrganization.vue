<template>
    <div>
        <mdb-card id="classic-card">
            <mdb-card-body class="z-depth-2 ">
                <div class="form-header">
                    <h3><i class="fa fa-user mt-2 mb-2"></i> <b>Organization</b> Add:</h3>
                </div>
                <div class="form-erros">
                    {{errorValidation}}
                </div>
                <mdb-input v-model="nameOrganization" label="Name" icon="envelope "/>
                <div class="text-center mt-4 black-text">
                    <div class="w-100" v-on:click="addOrganization()">
                        <btn class="up-button">Add</btn>
                    </div>
                </div>
            </mdb-card-body>
        </mdb-card>
    </div>
</template>
<script>
    import {  Container, Row, Column, ViewWrapper, MdMask, Btn, mdbCard, mdbCardBody, mdbInput, Fa, mdbNavbarBrand } from 'mdbvue'
    export default{
        name: 'DashboardHome',
        components: {
             Container, Row, Column, ViewWrapper, MdMask, Btn, mdbCard, mdbCardBody, mdbInput, Fa, mdbNavbarBrand
        },
        data(){
            return {
                nameOrganization : '',
                errorValidation : ''
            }
        },
        methods:{
            addOrganization(){
                if(this.nameOrganization == ''){
                    this.errorValidation = 'Please fill in the organization name field';
                    return;
                }
                let data = {
                    name : this.nameOrganization
                };
                this.$http.post(this.$urlAPI + 'organization/add',data,{
                    "headers":{
                        "authorization": "Bearer "+  this.$store.getters.getToken
                    }
                }).then(response =>{
                    if(response.data.status){
                        localStorage.setItem('organizations', JSON.stringify(response.data.organizations));
                        this.$store.commit('setOrganizations', response.data.organizations);
                        this.errorValidation = 'Organization Adicionada com sucesso';
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
            }
        }
    }
    
</script>
<style scoped>
.card{
    background: transparent;
}

.form-header, .up-button  {
    background-color: #be3030 !important;
}


</style>

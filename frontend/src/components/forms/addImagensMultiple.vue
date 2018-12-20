<template>
    <div id="contextoImagemUpload">
        <vue-upload-multiple-image
        @upload-success="uploadImageSuccess"
        @before-remove="beforeRemove"
        @edit-image="editImage"
        @data-change="dataChange"
        :data-images="images"
        dragText="Drop your images for Product"
        browseText="Upload Image"
        primaryText='Upload Image'
        dropText='Drop your images :)'
        accept='image/gif,image/jpeg,image/png,image/bmp,image/jpg'
        :maxImage="10"

        ></vue-upload-multiple-image>
        
    </div>
</template>
<script>
    import VueUploadMultipleImage from 'vue-upload-multiple-image'
    export default{
        name :'uploadImagesProducts',
        components: {
            VueUploadMultipleImage
        },
        methods: {
            uploadImageSuccess(formData, index, fileList) {
                // console.log('data', formData, index, fileList)
                this.images = fileList;
                this.$store.commit('SET_IMAGENS',fileList);
            },
            beforeRemove (index, done, fileList) {
                console.log('index', index, fileList)
                var r = confirm("remove image")
                if (r == true) {
                    done()
                } else {
                }
            },
            editImage (formData, index, fileList) {
                // console.log('edit data', formData, index, fileList)
            },
            dataChange (data) {
                this.images = data;
            }
        },
        data(){
            return {
                images: []
            }
        }
    }
</script>
<style>
#contextoImagemUpload .image-container{
    width: 100% !important;
}
</style>
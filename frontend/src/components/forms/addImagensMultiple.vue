<template>
  <form action="" class="file-upload-form" @submit.prevent="uploadFiles">
    <div class="file-upload">
      <label>Select one or more JPEG's to upload.</label>
      <input type="file" multiple @change.prevent="listUploads" ref="file-input" accept="image/jpeg">
      <input type="button" @click.prevent="resetFileField" value="clear">
    </div>
    <div class="row">
        <div class="col-sm-4" v-for="(file, index) in files" v-key:id="index"  v-bind:ref="`card-${index}`" v-bind:id="`card-${index}`"></div>
    </div>
  <ul v-show="showUploads" class="card-list">
    <!--       <transition-group name="softIn" tag="span"> -->
      <li >
        <div class="upload-overlay">Uploading..</div>
        <div class="checkbox-wrap">
          <div class="checkbox-wrap-inner">  
            <input type="checkbox" v-bind:id="`checkbox-${index}`" :v-model="checkboxes[index]" checked>
            <label v-bind:for="`checkbox-${index}`"></label>
            <span class="checkbox-sub-label">Upload</span>
        </div>
    </div>
    <span class="thumb">
      <img v-bind:src="imageUrlArray | getIndexedImage(index)">
  </span>
  <div class="details">
      <h1>Item {{ index | addOne }}</h1>
      <h2>File name: {{ file.name }}</h2>
      <h3>File size: {{ file.size | formatBytes }}</h3>
  </div>
  <div class="remove-card">
      <button type="button" class="remove-card-btn" @click.prevent="deleteItem" v-bind:value="index"> Remove</button></div>
  </li>
  <!--       </transition-group> -->
</ul>
<input type="submit" value="Submit">
</form>
</template>
<script>
  export default{
    name: 'imagesMultiple',
    data(){
        return{
            files: [],
            showUploads: false,
            removeCard: [],
            imageUrlArray: [],
            itemToDelete: '',
            checkboxes: [],
        }
    },
    methods: {
        listUploads(e){
          this.showUploads = true;
          let files = e.srcElement.files;

          if(files) {
            this.files = files;
          }
          
          let self = this;
                      
          for (var index = 0; index < files.length; index++) {
            // generate a new FileReader object
            var reader = new FileReader();

            // inject an image with the src url
            reader.onload = function(event) {
              const imageUrl = event.target.result;
              const thumb = document.querySelectorAll('.thumb')[index];
              self.imageUrlArray.push(imageUrl);
            }

            // when the file is read it triggers the onload 
            // event above.
            reader.readAsDataURL(files[index]);
          }
    },
    deleteItem: function(e) {
      let currentFiles = app.files;
      let target = toString(e.srcElement.value);
      let parentCard = e.srcElement.parentNode.parentNode;
      
      parentCard.classList.toggle('hidden');
      setTimeout(() => {
        parentCard.style.display = 'none';
      }, 1000);
    },
    uploadFiles(e) {
      let cardArray = [];
      
      let fileCount = app.files.length;
      for(let i = 0; i < fileCount; i++) {
        cardArray.push(`card-${i}`);
      }
      
      let cardIdsArray = [];
      
      cardArray.forEach((ref) => {

        let currentCard = document.getElementById(app.$refs[ref][0].id);
        cardIdsArray.push(currentCard);
      });
      
      cardIdsArray.forEach((id) => {
        // check if card is ticked for upload
        
        console.log(app.checkboxes);
        
        // if checkbox for this card is checked, set flag
        const uploadFlag = id.querySelectorAll('[type="checkbox"]:checked');

        // if this card has upload flag, upload
        if(uploadFlag) {
          id.classList.toggle('is-uploading');

          setTimeout(() => {
            id.classList.toggle('hidden');

            setTimeout(() => {
              id.style.display = 'none';
            }, 1000);
          }, 1000);
        }
      });

      // clear files
      app.files = [];  
    },  
    
    resetFileField(e) {
      console.log('reset');
      const fileInput = app.$refs['file-input'];
      console.log(typeof(fileInput));
      fileInput.value = '';
      app.files = [];
    },
  },
  
  filters: {
    
    addOne(val) {
      let output = Number(val);
      output += 1;
      return output;
    },
    
    getIndexedImage(val, index) {
      // console.log(`This: ${val}`);
      return val[index];
    },
    
    formatBytes(a, b) {
      if (0 == a) return "0 Bytes";
      var c = 1024,
          d = b || 2,
          e = ["Bytes", "KB", "MB", "GB", "TB", "PB", "EB", "ZB", "YB"],
          f = Math.floor(Math.log(a) / Math.log(c));
      return parseFloat((a / Math.pow(c, f)).toFixed(d)) + " " + e[f]
    }
  }
}
</script>

<style scoped>
// colors in use
// cadetblue
// cornflowerblue
// salmon
// --black
// --red


:root {
  // colors
  --black: #393838;
  --red: #f2214b;
  --green: #41f290;
  --pink: #fcf4f6;
  // project vars
  --easing-cubic-bezier: cubic-bezier(0.04, 2.37, 0.25, 1);
  --box-shadow: 0 0 12px rgba(0,0,0,0.4);
}


.file-upload-form {
  max-width: 600px;
  // min-width: 70vw;
  margin: 0 auto;
}

.file-upload {
  background: white;
  box-shadow: var(--box-shadow);
  margin-bottom: 1rem;
  display: flex;
  justify-content: space-between;
  padding: 1rem;
  align-items: center;
}

.card {
  background: white;
  box-shadow: var(--box-shadow);
  margin-bottom: 1rem;
  display: flex;
  align-items: center;
  justify-content: space-around;
  transition: all 200ms ease;
  position: relative;
}

.is-uploading .upload-overlay {
  display: flex;
}

.upload-overlay {
  background: rgba(0,0,0,0.6);
  position: absolute;
  left: 0;
  top: 0;
  bottom: 0;
  color: white;
  font-size: 2rem;
  font-weight: bold;
  display: none;
  right: 0;
  align-items: center;
  justify-content: space-around;
}

.card-list {
  list-style: none;
  margin: 0;
  padding: 0;
}

[type="submit"] {
  display: block;
  background: darken(cornflowerblue, 10%);
  color: white;
  appearance: none;
  width: 100%;
  border: 0;
  padding: 1rem;
  font-size: 1.4rem;
}

.thumb img {
  width: 7rem;
  height: 9rem;
  display: block;
  margin-bottom: 0;
  object-fit: cover;
  align-self: stretch;
}

label {
  font-size: .8rem;
  display: block;
}

.details {
  padding: 0 .6rem;
  flex-grow: 2;
}

h1 {
  font-size: .8rem;
}

h2 {
  font-size: 1.1rem;
  word-wrap: break-word;
  max-width: 60%;
}

h3 {
  font-size: .9rem;
}

h1, h2, h3, h4, h5, h6 {
  margin: .6rem 0;
}

.hidden {
  opacity: 0;
  transform: translateY(-20%);
  transition: all 200ms ease;
}

[type="checkbox"] {
  display: none;
  
  & ~ label {
    display: block;
    border: 2px solid var(--black);
    padding: 1rem;
    border-radius: 2rem;
    margin: 0 20px;
    opacity: .4;
    position: relative;

    &:before {
      content: '\f00c';
      font-size: 1.2rem;
      font-family: 'FontAwesome';
      display: block;
      color: var(--black);
      position: absolute;
      transform: scale(.8);
      transform-origin: 50% 50%;
      opacity: 0;
      transition: scale 300ms var(--easing-cubic-bezier), opacity 300ms var(--easing-cubic-bezier);
      left: .4rem;
      top: .4rem;
  }
}

&:checked ~ label:before {
    // transform: translateX(.4rem) translateY(.4rem) scale(1.1);
    transform: scale(1.3);
    transition: scale 300ms var(--easing-cubic-bezier), opacity 300ms var(--easing-cubic-bezier);
    opacity: 1;
}
}

.checkbox-sub-label {
  display: block;
  color: var(--black);
  opacity: .4;
  font-size: 11px;
  text-align: center;
  margin: .6rem;
}

.remove-card {
  flex-grow: 2;
  align-self: stretch;
  display: flex;
  flex-basis: 10%;
  flex-grow: 0;
  
  &-btn {
    appearance: none;
    background-color: var(--pink);
    border: 0;
    color: var(--red);
    
    &:hover {
      text-decoration: underline;
  }
}
}

.checkbox-wrap {
  background: var(--green);
  align-self: stretch;
  display: flex;
  padding-top: 1rem;
  flex-direction: column;
  align-items: center;
  justify-content: space-around;
  flex-wrap: wrap;
}

// vue transitions

// softIn
.softIn-enter {
  opacity: 0;
  transform: translateY(-20%);
}

.softIn-enter-to {
  opacity: 1;
  transform: translateY(0);
}

.softIn-enter-active {
  transition: all 200ms ease; 
}

.softIn-leave {
  opacity: 1;
  transform: translateY(0);
}

.softIn-leave-to {
  opacity: 0;
  transform: translateY(-20%);
}

.softIn-leave-active {
  transition: all 200ms ease; 
}

.softIn-move {
  transition: all 200ms ease;
}



</style>
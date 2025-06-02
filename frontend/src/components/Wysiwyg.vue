<template>
<Editor 
  api-key="fp96f5nz8wa2szjk491igthnj4ru9i0nlg7j8dmrtupxflxr" 
  :init="{
    toolbar_mode: 'sliding',
    plugins: [
      // Core editing features
      'anchor', 'autolink', 'charmap', 'codesample', 'emoticons', 'image', 'link', 'lists', 'media', 'searchreplace', 'table', 'visualblocks', 'wordcount',
    ],
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
    tinycomments_mode: 'embedded',
    tinycomments_author: 'Author name',
    mergetags_list: [
      { value: 'First.Name', title: 'First Name' },
      { value: 'Email', title: 'Email' },
    ],
    min_height: 800,
  }" 
  initial-value="Welcome to TinyMCE!"
/>
</template>

<script>
import Editor from '@tinymce/tinymce-vue'

export default {
    components: {
      Editor,
    },
    data(){
        return {
            
        };
    },
    methods: {
        
    },
    mounted(){
    },
}
</script>
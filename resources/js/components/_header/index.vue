<template>
  <div>

    <editor-menu-bar :editor="editor" v-slot="{ commands, isActive }">
      <div class="mb-4">

        <button class="btn btn-outline-primary" :class="{ 'active': isActive.heading({ level: 1 }) }" @click="commands.heading({ level: 1 })">
          H1
        </button>

        <button class="btn btn-outline-primary" :class="{ 'active': isActive.heading({ level: 2 }) }" @click="commands.heading({ level: 2 })">
          H2
        </button>

        <button class="btn btn-outline-primary" :class="{ 'active': isActive.heading({ level: 3 }) }" @click="commands.heading({ level: 3 })">
          H3
        </button>

        <hr>

      </div>
    </editor-menu-bar>

    <editor-content class="editor__content" :editor="editor" />

    <hr>

    <button type="button" class="btn btn-primary" @click="save_html(editor.getHTML())">Сохранить</button>

  </div>
</template>

<script>
import { Editor, EditorContent, EditorMenuBar, } from 'tiptap'
import { Heading } from 'tiptap-extensions'
import Doc from './Doc'
export default {
  components: {
    EditorContent,
    EditorMenuBar,
  },
  props: {
    content: {
      required: true,
    },
    section_id: {
      required: true,
    },
  },
  data() {
    return {
      editor: new Editor({
        autoFocus: true,
        extensions: [
          new Doc(),
          new Heading({ levels: [1, 2, 3] }),
        ],
        content: this.content ? this.content : '<h3>Title</h3>',
      }),
    }
  },
  methods:{
    save_html: function(html_data){
      axios.post('/api/section/' + this.section_id + '/update_content', {
        _method: 'PUT',
        content: html_data
      })
      .then(function () {
        window.location.reload()
      })
      .catch(function (error) {
        console.log(error)
      })
    },
  },
  beforeDestroy() {
    this.editor.destroy()
  },
}
</script>

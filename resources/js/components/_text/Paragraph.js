import { Node } from 'tiptap'

export default class Paragraph extends Node {

  get name() {
    return 'paragraph'
  }

  get schema() {
    return {
      content: 'inline*',
      group: 'block',
      parseDOM: [
        {
          tag: 'p:not(.lead)',
        },
      ],
      toDOM: mark => {
        return  ["p", 0];
      },
    }
  }

}

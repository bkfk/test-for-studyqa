import { Node } from 'tiptap'

export default class Lead extends Node {

  get name() {
    return 'lead'
  }

  get schema() {
    return {
      content: 'inline*',
      group: 'block',
      parseDOM: [
        {
          tag: 'p.lead',
        },
      ],
      toDOM: mark => {
        return  ["p", {class: `lead`}, 0];
      },
    }
  }

}

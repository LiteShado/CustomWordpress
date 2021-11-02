// const react = require("react")
// import { registerBlockType } from '@wordpress/data';
// import { useBlockProps } from '@wordpress/block-editor';

wp.blocks.registerBlockType('nat/border-box', {
    // apiVersion: 2,

    title: 'Border Box',

    icon: 'smiley',

    category: 'text',

    // attributes: {
    //     content: { type: 'string', source: 'meta', meta: 'content' },
    //     color: { type: 'string' }
    // },
    attributes: {
        category: {
            type: 'string',
            source: 'attribute',
            attribute: 'alt',
            selector: 'img',
        },

        example: {
            attributes: {
                // cover: 'https://example.com/image.jpg',
                author: 'William Shakespeare',
                pages: 500,
                viewportWidth: 800
            },

            innerBlocks: [
                {
                    name: 'core/paragraph',
                    attributes: {
                        /* translators: example text. */
                        content: __(
                            'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent et eros eu felis.'
                        ),
                    },
                }]
        },
    },

    edit: function(value) {

        function updateColor(props) {
            props.setAttributes({ color: value.hex})
        }

        function updateContent(event) {
            props.setAttributes({content: event.target.value })
        }

        return wp.element.createElement(
        "div",
        null,
        wp.element.createElement(
            "h3",
            null,
            "Border Box"
            ),

            wp.element.createElement("input", { type: "text", value: props.attributes.content, onChange: updateContent }),
            React.createElement(wp.components.ColorPicker, {color: props.attributes.color, onChangeComplete: updateContent}),

        );

    },

    save: function(props) {
        return  wp.element.createElement(
            "h3",
            { style: { border: "5px solid " + props.attributes.color } },
            props.attributes.content)
    }

})

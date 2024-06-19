
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevexHub | Design Your Page</title>
    <link rel="stylesheet" href="https://unpkg.com/grapesjs/dist/css/grapes.min.css">
    <style>
        body, html { height: 100%; margin: 0; }
        .gjs-editor { height: 100%; }
    </style>
</head>
<body>
    <div id="gjs">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://unpkg.com/grapesjs"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {

        function myPlugin(editor) {
            // Use the API: https://grapesjs.com/docs/api/
            editor.Blocks.add('my-first-block', {
                label: 'Simple block',
                content: '<div class="my-block">This is a simple block</div>',
            });
            }

        var editor = grapesjs.init({
            container: '#gjs',
            fromElement: true,
            height: '100%',
            width: 'auto',
            storageManager: {
                type: 'remote',
                stepsBeforeSave: 1,
                urlStore: '/save-page',
                urlLoad: '/load-page',
            },
            plugins: [myPlugin],
        });

        // Add 'Save' button to the panel
    editor.Panels.addPanel({
        id: 'panel-top',
        el: '.panel__top',
    });

    editor.Panels.addButton('panel-top', [{
        id: 'save-button',
        className: 'btn btn-outline-primary',
        label: 'Save',
        command: 'save-db',  // Custom command to save the design
        attributes: { title: 'Save your design to the server' }
    }]);

    // Define the command to save the design
    editor.Commands.add('save-db', {
        run: function(editor) {
            editor.store();  // This will trigger the storageManager's save process
        }
    });

        var blockManager = editor.Blocks;

        // Layout blocks

        blockManager.add('one-column-block', {
                label: 'One Column',
                content: `<div style="display: flex; justify-content: space-between; margin-bottom: 20px; padding:10px;">
                            <div style="display: flex; justify-content: center; width:100%; max-width:100%; margin:5px; padding: 10px; background-color: #f8f9fa; border: 1px solid #dee2e6;">Column</div>
                        </div>`,
                category: 'Layout',
                attributes: {
                    title: 'Insert One column block'
                }
            });


        // blockManager.add('section-block', {
        //     label: 'Section',
        //     content: '<section><h1>Section Title</h1><p>Section content goes here...</p></section>',
        //     category: 'Layout',
        //     attributes: {
        //         title: 'Insert section block'
        //     }
        // });

        blockManager.add('two-column-block', {
                label: 'Two Columns',
                content: `<div style="display: flex; justify-content: space-between; margin-bottom: 20px; padding:10px;">
                            <div style="display: flex; justify-content: center; width:50%; max-width:50%; margin:5px; padding: 10px; background-color: #f8f9fa; border: 1px solid #dee2e6;">Left Column</div>
                            <div style="display: flex; justify-content: center; width:50%; max-width:50%; margin:5px; padding: 10px; background-color: #f8f9fa; border: 1px solid #dee2e6;">Right Column </div>
                        </div>`,
                category: 'Layout',
                attributes: {
                    title: 'Insert two columns block'
                }
            });


        blockManager.add('three-column-block', {
            label: 'Three Columns',
            content: `<div style="display: flex; justify-content: space-between; margin-bottom: 20px; padding:10px;">
                        <div style="display: flex; justify-content: center; width:50%; max-width:33%; margin:5px; padding: 10px; background-color: #f8f9fa; border: 1px solid #dee2e6;">Column 1</div>
                        <div style="display: flex; justify-content: center; width:50%; max-width:33%; margin:5px; padding: 10px; background-color: #f8f9fa; border: 1px solid #dee2e6;">Column 2</div>
                        <div style="display: flex; justify-content: center; width:50%; max-width:33%; margin:5px; padding: 10px; background-color: #f8f9fa; border: 1px solid #dee2e6;">Column 3</div>
                      </div>`,
            category: 'Layout',
            attributes: {
                title: 'Insert three columns block'
            }
        });

        blockManager.add('container-block', {
            label: 'Container',
            content: `<div class="container">
                        <h1>Container Title</h1>
                        <p>Container content goes here...</p>
                      </div>`,
            category: 'Layout',
            attributes: {
                title: 'Insert container block'
            }
        });
        
        // Basic blocks
        blockManager.add('h1-block', {
            label: 'Heading',
            content: '<h1>Put your title here</h1>',
            category: 'Basic',
            attributes: {
                title: 'Insert h1 block'
            }
        });

        blockManager.add('text-block', {
            label: 'Text',
            content: '<p>Insert your text here</p>',
            category: 'Basic',
            attributes: {
                title: 'Insert text block'
            }
        });

        blockManager.add('image-block', {
            label: 'Image',
            content: '<img src="https://via.placeholder.com/150" alt="Placeholder Image"/>',
            category: 'Media',
            attributes: {
                title: 'Insert image block'
            }
        });

        blockManager.add('two-column-block', {
                label: 'Two Columns',
                content: `<div style="display: flex; justify-content: space-between; margin-bottom: 20px; padding:10px;">
                            <div style="display: flex; justify-content: center; width:50%; max-width:50%; margin:5px; padding: 10px; background-color: #f8f9fa; border: 1px solid #dee2e6;">Left Column</div>
                            <div style="display: flex; justify-content: center; width:50%; max-width:50%; margin:5px; padding: 10px; background-color: #f8f9fa; border: 1px solid #dee2e6;">Right Column </div>
                        </div>`,
                category: 'Layout',
                attributes: {
                    title: 'Insert two columns block'
                }
            });

        
    });
</script>
</body>
</html>

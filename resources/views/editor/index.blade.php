<!DOCTYPE html>
<html>
<head>
    <title>Web Builder</title>
    <link rel="stylesheet" href="{{ asset('assets/css/editor.css') }}">
</head>
<body>
    <div id="toolbar">
        <button onclick="savePage()" id="savebtn">Save Page</button>
    </div>
    <div id="editor">
        <div id="sidebar">
            <h3>Styling</h3>
            <ul id="property-categories">
                <li>
                    <div class="itemname"  onclick="toggleCategory('layout')"><p>Layouts</p><p class="symbol">&#11163;</p></div>
                    <div id="layout" class="category">
                    <div class="layout">      
                        <div class="element">
                            <div class="draggable" id="component1" draggable="true" ondragstart="drag(event)">
                                <div class="column"></div>
                            </div>
                            <p>01 Column</p>
                        </div>
                        <div class="element"> 
                            <div class="draggable" id="component2" draggable="true" ondragstart="drag(event)">
                                <div class="column"></div>
                                <div class="column"></div>
                            </div>
                            <p>02 Columns</p>
                        </div>
                        <div class="element"> 
                            <div class="draggable" id="component3" draggable="true" ondragstart="drag(event)">
                                <div class="column"></div>
                                <div class="column"></div>
                                <div class="column"></div>
                            </div>
                            <p>03 Columns</p>
                        </div>
                        <div class="element"> 
                            <div class="draggable" id="component4" draggable="true" ondragstart="drag(event)">
                                <div class="column">&#x210D;</div>
                            </div>
                            <p>Heading</p>
                        </div>
                        <div class="element"> 
                            <div class="draggable" id="component5" draggable="true" ondragstart="drag(event)">
                                <div class="column">&#x1FC;</div>
                            </div>
                            <p>Text Box</p>
                        </div>
                    </div>
                    </div>
                </li>
        </div>
        <div id="canvas" ondrop="drop(event)" ondragover="allowDrop(event)">
            <!-- Canvas content -->
        </div>
        <div id="property-sidebar">
            <h3>Styling</h3>
            <ul id="property-categories">
                <li>
                    <div class="itemname"  onclick="toggleCategory('layouts')"><p>Layouts</p><p class="symbol">&#11163;</p></div>
                    <div id="layouts" class="category">
                        <label for="display">Display:</label>
                        <select id="display">
                            <option value="block">Block</option>
                            <option value="inline-block">Inline Block</option>
                            <option value="inline">Inline</option>
                        </select>
                    </div>
                </li>
                <li>
                <div class="itemname"  onclick="toggleCategory('size')"><p>Size</p><p class="symbol">&#11163;</p></div>
                    <div id="size" class="category">
                        <label for="width">Width:</label>
                        <input type="number" id="width" placeholder="Width in Pixel">
                        <label for="height">Height:</label>
                        <input type="number" id="height" placeholder="Height in Pixel">
                    </div>
                </li>
                <li>
                <div class="itemname"  onclick="toggleCategory('space')"><p>Spacing</p><p class="symbol">&#11163;</p></div>
                    <div id="space" class="category">
                        <label for="padding">Padding:</label>
                        <div class="tlrbbg">
                            <div class="tlrb">
                                <input type="number" title="Top" id="paddingTop" placeholder="&#11165;">
                                <div>
                                    <input type="number" title="Left" id="paddingLeft" placeholder="&#11164;">
                                    <input type="number" title="All" id="padding">
                                    <input type="number" title="Right" id="paddingRight" placeholder="&#11166;">
                                </div>
                                <input type="number" title="Bottom" id="paddingBottom" placeholder="&#11167;">
                            </div>
                        </div>
                        <label for="margin">Margin:</label>
                        <div class="tlrbbg">
                            <div class="tlrb">
                                <input type="number" title="Top" id="marginTop" placeholder="&#11165;">
                                <div>
                                    <input type="number" title="Left" id="marginLeft" placeholder="&#11164;">
                                    <input type="number" title="All" id="margin">
                                    <input type="number" title="Right" id="marginRight" placeholder="&#11166;">
                                </div>
                                <input type="number" title="Bottom" id="marginBottom" placeholder="&#11167;">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                <div class="itemname"  onclick="toggleCategory('text')"><p>Text</p><p class="symbol">&#11163;</p></div>
                    <div id="text" class="category">
                        <label for="font-family">Font:</label>
                        <select id="font-family">
                            <option value="Arial">Arial</option>
                            <option value="Courier New">Courier New</option>
                            <option value="Georgia">Georgia</option>
                            <option value="Times New Roman">Times New Roman</option>
                            <option value="Verdana">Verdana</option>
                        </select>
                        <label for="font-size">Font Size:</label>
                        <input type="number" id="font-size" min="8" max="72" value="14">
                        <!-- <label for="font-color">Font Color:</label> -->
                        <div class="fcolumn">
                            <input type="color" id="font-color">
                            <button onclick="toggleBold()" class="togglebtn"> <b>B</b></button>
                            <button onclick="toggleUnderline()" class="togglebtn"><u>U</u></button>
                        </div>
                    </div>
                </li>
                <li>
                <div class="itemname"  onclick="toggleCategory('border')"><p>Border</p><p class="symbol">&#11163;</p></div>
                    <div id="border" class="category">
                        <label for="border-radius">Border Radius:</label>
                        <div class="tlrbbg">
                            <div class="tlrb">
                                <input type="number" title="Top" id="border-top-radius" placeholder="&#11165;">
                                <div>
                                    <input type="number" title="Left" id="border-left-radius" placeholder="&#11164;">
                                    <input type="number" title="All" id="border-radius">
                                    <input type="number" title="Right" id="border-right-radius" placeholder="&#11166;">
                                </div>
                                <input type="number" title="Bottom" id="border-bottom-radius" placeholder="&#11167;">
                            </div>
                        </div>
                        <label for="border-width">Border Width:</label>
                        <div class="tlrbbg">
                            <div class="tlrb">
                                <input type="number" title="Top" id="border-top-width" placeholder="&#11165;">
                                <div>
                                    <input type="number" title="Left" id="border-left-width" placeholder="&#11164;">
                                    <input type="number" title="All" id="border-width">
                                    <input type="number" title="Right" id="border-right-width" placeholder="&#11166;">
                                </div>
                                <input type="number" title="Bottom" id="border-bottom-width" placeholder="&#11167;">
                            </div>
                        </div>
                        <label for="border-color">Border Color:</label>
                        <input type="color" id="border-color">
                        <label for="border-style">Border Style:</label>
                        <select id="border-style">
                            <option value="solid">Solid</option>
                            <option value="dashed">Dashed</option>
                            <option value="dotted">Dotted</option>
                        </select>
                    </div>
                </li>
                <li>
                <div class="itemname"  onclick="toggleCategory('background')"><p>Background</p><p class="symbol">&#11163;</p></div>
                    <div id="background" class="category">
                        <label for="background-color">Background Color:</label>
                        <input type="color" id="background-color">
                        <label for="background-image">Background Image URL:</label>
                        <input type="text" id="background-image">
                    </div>
                </li>
                <li>
                <div class="itemname"  onclick="toggleCategory('effects')"><p>Effects</p><p class="symbol">&#11163;</p></div>
                    <div id="effects" class="category">
                        <label for="opacity">Opacity:</label>
                        <input type="number" id="opacity" min="0" max="1" step="0.1">
                        <label for="box-shadow">Box Shadow:</label>
                        <input type="text" id="box-shadow">
                        <label for="cursor">Cursor:</label>
                        <select id="cursor">
                            <option value="default">Default</option>
                            <option value="pointer">Pointer</option>
                            <option value="move">Move</option>
                        </select>
                    </div>
                </li>
            </ul>
        </div>


    </div>

    <script src="{{ asset('assets/js/editor.js') }}"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">

<script>
function toggleCategory(category) {
    const categoryElement = document.getElementById(category);
    const allCategories = document.querySelectorAll('.category');
    const symbolElement = categoryElement.previousElementSibling.querySelector('.symbol');
    const itemnameElement = categoryElement.parentElement.querySelector('.itemname');

    // Close all categories
    allCategories.forEach(cat => {
        if (cat !== categoryElement) {
            cat.classList.remove('open');
            const othersymbolElement = cat.previousElementSibling.querySelector('.symbol');
            othersymbolElement.style.transform = 'rotate(0deg)';
            const otheritemnameElement = cat.parentElement.querySelector('.itemname');
            // otheritemnameElement.style.color = '#000';
            // otheritemnameElement.style.backgroundColor = '#e0e0e0';
        }
    });

    // Toggle the selected category
    categoryElement.classList.contains('open') ? categoryElement.classList.remove('open') : categoryElement.classList.add('open');
    if (categoryElement.classList.contains('open')) {
        symbolElement.style.transform = 'rotate(180deg)';
    } else {
        symbolElement.style.transform = 'rotate(0deg)';
    }

}


</script>
</body>
</html>

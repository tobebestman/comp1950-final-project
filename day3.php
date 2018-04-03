<?php
    $pageName = 'Day 3';
    include './templates/header.php';
    include './templates/agenda-header.php';
?>

    <ul>
        <li> <a href="#Referencing-Stylesheets">Referencing Stylesheets</a></li>
        <li> <a href="#Importing">Importing</a></li>
        <li> <a href="#Fonts">Fonts</a></li>
        <li> <a href="#Compact-CSS">Compact CSS</a></li>
        <li> <a href="#Advanced-Selectors">Advanced Selectors</a></li>
        <li> <a href="#Rule-Specificity">Rule Specificity</a></li>
        <li> <a href="#To-Do">To Do</a></li>
    </ul>
    </section>
    <section>
        <button onclick="topFunction()" id="BackToTopButton" title="Go to top">Top</button>

        <h2 id="Referencing-Stylesheets">Referencing Stylesheets</h2>
        <p>
            When linking to external style sheets, there are a number of features to be aware of:
        </p>
        <ul>
            <li>
                Each stylesheet requires it's own link tag
            </li>
            <li>
                Multiple stylesheets can be loaded (main.css, fonts.css, layout.css, etc)
            </li>
            <li>
                rel determines how the HTML will use the file linked to (REQUIRED)
            </li>
            <li>
                href defines the path, relative or absolute, to the css file (REQUIRED)
            </li>
            <li>
                type attribute is has been deprecated (dropped in HTML5)
            </li>
            <li>
                title attribute allows the user to group stylesheets
            </li>
            <li>
                media attribute allows you to specify what medium this should be viewed in.
            </li>
        </ul>
        <p class="code-p">
            <code>&lt;link rel="stylesheet" href="http://www.mysite.com/css/styles.css" type="text/css" title="Main Style" media="screen" /&gt;</code>
        </p>
        <h3>Media variations:media attribute</h3>
        <p>
            media="type" can be a powerful tool
        </p>
        <p>
            Examples of media types:
        </p>

        <ul>
            <li>all - well supported, commonly used (DEFAULT) </li>
            <li>aural</li>
            <li>braille </li>
            <li>embossed</li>
            <li>handheld - not common (smart phones identify as screen)</li>
            <li>print - well supported, commonly used</li>
            <li>projection</li>
            <li>screen - well supported, commonly used</li>
            <li>tty</li>
            <li>tv</li>
        </ul>

        <p>
            Note that most smart phone devices (iPhones, Andriod, etc) do not identify themselves as media type handheld. The reasoning was that the devices were more than capable of displaying standard web sites, so they identify as screen
        </p>
        <h3>Alternate style sheets: rel attribute </h3>
        <p>
            You can also have alternate stylesheets supported
        </p>

        <ul>
            <li>rel="stylesheet" defines the default stylesheets to use </li>
            <li>rel="alternate stylesheet" allows different styles to be defined </li>
        </ul>
        <p>
            Tip: If you have multiple sheets that belong to one "look" make sure they all have the same title
        </p>
        <p>You can create alternate style sheets for users, allowing them to select which ones they would like to see</p>
        <p>An example would be to create a 'Larger Text' style sheet with everything in a larger font, or providing an option for users to choose an austere, simple page instead of a colorful/image heavy stylesheet</p>
        <p>Many browsers are now giving users the ability to select which sheet they would like to see. (Firefox: View > Page Style)</p>

        <h3>Alternate style sheets: title attribute</h3>
        <p>
            A stylesheet is "persistent" if it is linked with rel="stylesheet" and has no title attribute. All persistent stylesheets are always used when rendering</p>
        <p>
            A stylesheet is "preferred" if it is linked with rel="stylesheet" and has a title attribute. these styles will be used as the default. preferred stylesheets with the same title are grouped together</p>
        <p>
            Finally, a stylesheet is "alternate" if it is linked with rel="alternate stylesheet" and has a title. These stylesheets are supposed to allow the user to choose stylesheets, they are grouped together by title and show up in the browser's stylesheet selector if it has one (View > Page Style in Firefox). Each group (by title) is mutually exclusive.</p>
        <h3>Persistent Styles</h3>
        <p>
            Persistent styles apply in all cases, even when alternate styles are chosen.
        </p>
        <p class="code-p">
            <code>
                             &lt;!-- rel="stylesheet" with NO title="" --&gt;
                             <br>
                             &lt;link rel="stylesheet" href="css/persistent_styles.css" /&gt;
                        </code>
        </p>

        <h3>Preferred Styles</h3>
        <p>
            Preferred styles will be the default, but will be replaced if alternate styles are chosen.
        </p>
        <p class="code-p">
            <code>
                             &lt;!-- rel="stylesheet" AND a title="" --&gt;
                             <br>
                             &lt;link rel="stylesheet" href="css/default_styles.css" title="Standard Styling" /&gt;
                        </code>
        </p>
        <h3>Alternate Styles</h3>
        <p>
            Alternate styles will not be applied by default, but may be chosen by the user agent. Each alternate stylesheet must have a title="".
        </p>
        <p class="code-p">
            <code>
                             &lt;!-- use rel="alternate stylesheet" for alternative stylesheets... --&gt;
                             <br>
                             &lt;link rel="alternate stylesheet" href="css/large_text.css" title="Large Text Styles"  /&gt;
                        </code>
        </p>

        <h3>Grouping Stylesheets</h3>
        <p>
            If more than one link tag shares the same title="" then they will be grouped together.
        </p>
        <p class="code-p">
            <code>
                             &lt;!-- group stylesheets with shared title="" --&gt;
                             <br>
                             &lt;link rel="alternate stylesheet"	href="css/monchrome_layout.css"	title="Monochrome Styles"  /&gt;
                             <br>
                             &lt;link rel="alternate stylesheet" href="css/monchrome_fonts.css" title="Monochrome Styles"  /&gt;
                        </code>
        </p>
        <p>
            To enable alternate stylesheet switching, you can either apply some javascript to manage the switch with hyperlinks, or use <a href="https://support.mozilla.org/en-US/questions/841578">Firefox for alternate stylesheets.</a>
        </p>

        <h2 id="Importing">Importing</h2>
        <h3>@Import:Managing Multiple CSS Files</h3>
        <p>
            You can use the @import method to import multiple stylesheets from a basic stylesheet that you link to. This will reduce the clutter that can sometimes occur within the &lt;head&gt; section.
        </p>
        <p>
            It is also a great place to be able to manage your CSS. From your main document, create a &lt;link&gt; to your styles.css page.
        </p>
        <p>
            In the body of the styles.css file, import as many files as you need:
        </p>
        <ul>
            <li>@import url("css/type.css");</li>
            <li>@import url("css/nav.css");</li>
            <li>@import url("css/template.css");</li>
        </ul>
        <p>
            NOTE: when using the @import directive in an external CSS file, ensure it comes before your CSS selector rules. It might be best to not include any CSS rules in a page that uses @import.
        </p>
        <h3>@charset: Assigning CSS Character Set</h3>
        <p>
            If your CSS files only contain standard keyboard characters, assigning the character set is not required. The CSS language itself does not use any exotic characters, so assigning a charset is often omitted. If, however, your CSS needs to use special characters, ensuring the correct character set can be very important. Eg: When using a pseudoclass to add content to HTML content: "Äwesome!"
        </p>
        <p>
            If needed, add the @charset rule to the top of the CSS document.
        </p>
        <p class="code-p">
            <code>
                        /* assign charset at top of .css file */ @charset "utf-8";
                        <br>
                        /* CSS rules follow... */
                        </code>
        </p>

        <h2 id="Fonts">Fonts</h2>
        <h3>@font-face And Font Servers</h3>
        <p>Fonts that aren't available on the client machine can be provided by a third-party font server or by your website's server.</p>
        <P>
            <ul>
                <li>
                    <a href="https://fonts.google.com/">Google Fonts</a>
                </li>
                <li>
                    <a href="https://typekit.com/">Adobe Typekit</a>
                </li>
                <li>
                    <a href="https://www.fontsquirrel.com/">Font Squirrel</a>
                </li>
                <li>
                    Plenty more available online...
                </li>
            </ul>
        </P>
        <h3>Third Party Font Server</h3>
        <p>
            Browse the font server site, select the fonts you like and they wil provide you with code for a
            <code>&lt;link /&gt;</code> tag to add to your HTML. You can then use the font in your CSS.</p>
        <p class="code-p">
            <code>&lt;!-- add the link tag to the HTML --&gt; <br>
                            &lt;link href="https://fonts.googleapis.com/css?family=Bungee" rel="stylesheet" /&gt; <br>
                            /* use the font in the CSS */ selector{ font-family: 'Bungee', cursive; }</code>
        </p>
        <p>
            <br> No longer stuck with 'Arial', 'Helvetica', 'Georgia' and the rest.
        </p>
        <h3>Serve Fonts From Your Website</h3>
        <p>
            If the font(s) are copyright free, or if you have license to distribute a font, you can serve them yourself using the CSS <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/@font-face">@font-face</a> directive.
        </p>
        <p>
            Different client systems will need fonts in varying formats, so if you are distributing the font yourself, be sure to have the font available in most common formats.
        </p>

        <ul>
            <li>Obtain the font(s) you wish to use. You must either have license to distribute the font or the font must be copyright free.
            </li>
            <li>Upload your font(s) to a Font Generator to obtain a font kit including various formats for the font(s)
            </li>
            <li>Uncompress the font kit and locate it somewhere with your website files
            </li>
            <li>Use @font-face to load the fonts. The font-kit generated by Squirrel Font will include some same CSS to help you with the sometimes volumous coding
            </li>
            <li>Apply the new font in CSS
            </li>
        </ul>
        <p class="code-p">
            <code>
                     /* load the font in CSS */<br> @font-face {<br> font-family: 'alex_brushregular';<br> src: url('/fonts/alexbrush-regular-webfont.woff2') format('woff2'),<br> url('/fonts/alexbrush-regular-webfont.woff') format('woff'), <br> url('/fonts/alexbrush-regular-webfont.ttf') format('tff');<br> }
                    <br> /* use the font in CSS */<br> selector{ <br> font: bold 20px alex_brushregular ;<br> color:#555;
                    <br> }
                    <br>
                    </code>
        </p>
        <p>Don't get carried away with wild font choices. Some fonts have very poor readability, reducing accessibility.</p>
        <h3>CSS Measurements</h3>
        <p>
            In CSS, there are a number of measurement values that can be used in declarations.
        </p>
        <h3>Size measurements</h3>

        <ul>
            <li>px - Pixels is one of the most common measuring types. It is specific to computers, as it renders based on the pixel-display of all monitors. Great for specific measurements on boxes and borders, but for fonts, it can lead to difficulty as some browsers don't allow scaling and font can end up too small % - Percentage measurements are also very common.</li>
            <li>em - A relative measurement of the letter "m" in the chosen font. This is a popular one for spacing around text, as it inherits the font dimensions rem - Similar to em, this will inherit only the Root value, helpful for avoiding 'compound inheritance' values
            </li>
            <li>pt - Points is an aold system related to type-setting that had a standard size for points. This is a relative size based on the users' system pc - Picas is a very old system that was frequently related to typewritten documents. Rarely used.
            </li>
            <li>ex - Similar to em, this is a relative measurement of the letter "x". However, it is rarely used, and not fully supported
            </li>
            <li>vh, vw, vmin, vmax - size relative to viewport widths and heights. very useful for scaling, though may not enjoy full support yet
            </li>
            <li>named - This refers to fonts and a few other elements. The named sizes are xx-small, x-small, small, medium, large, x-large, xx-large. They are relative to the browsers base font size
            </li>
        </ul>
        <h3>Color Measurement</h3>
        <p>Colors can be specified in a number of ways, corresponding to the system that your organization or visual element requires. Almost all color systems use a method for expressing a combination of the three color spaces used for displaying colors on computer monitors: Red Green and Blue.</p>
        <ul>
            <li>Hex: #003366 - One of the most common systems, it combines 2 digits each for Red Green and Blue. Each hex pair stand stands for digits between 00 and FF in hexadecimal</li>
            <li>Compact Hex: #f30 - This is almost identical to the Hex version, except that when three numbers are used, most browsers will just double-up each digit. So, #f30 will become #ff3300</li>
            <li>Named: cornflowerblue - Although the official W3C specification only lists 16 named colors, almost every browser supports the various <a href="www.google.ca/search?q=css+named+colors">named colors</a>
            </li>
            <li>RGB: rgb(255, 0, 255) - This allows the user to specify the same thing as Hex, but in Decimal format</li>
            <li>RGB %: rgb(100%, 0%, 50%) - Almost identical to RGB, but with percentages of each color space instead</li>
        </ul>




        <h2 id="Compact-CSS">Compact CSS</h2>

        <p>When building your CSS rules, there are some easy ways to compact your code, reducing code bloat and filesize.</p>
        <h3>Grouping selectors</h3>
        <ul>
            <li>If you would like to apply the same style to a multitude of different selectors, you can group them with the comma
            </li>
            <li>h1, h2, h3, h4, h5 { color: red; }
            </li>
            <li>This can be done with Elements, classes and IDs
            </li>
            <li>Specific rules for H3 (for example) can come later
            </li>
        </ul>
        <h3>Grouping comes to Classes</h3>
        <ul>
            <li>As well as grouping Elements, you can also group classes
            </li>
            <li>Define several classes: <code>.cool{ color:red; } .wicked { border:1px solid black; }</code>
            </li>
            <li>Assign several classes at once:
                <code>&lt;p class="cool wicked"&gt;</code> will select both the cool and wicked classes
            </li>
            <li>The order of the attribute values is irrelevant
            </li>
            <li>Case is important! Remember to use a single rule for CSS naming and stick with it
            </li>
        </ul>
        <h3>Rule Compacting</h3>
        <p>
            There are a lot of rules that will accept a compacted ruleset:</p>
        <ul>
            <li>margin: top right bottom left;</li>
            <li>padding: top right bottom left;</li>
            <li>border: width style color;</li>
            <li>font: font-style font-variant font-weight font-size/line-height font-family;</li>
            <li>background: color image position repeat size attachment;</li>
        </ul>
        Box model properties support 1, 2, 3 and 4 values. For example:
        <ul>
            <li>border-width:10px;</li>
            <ul>
                <li>all four borders are 10px</li>
            </ul>
            <li>border-width:10px 20px;</li>
            <ul>
                <li>top and bottom borders are 10px</li>
                <li>left and right borders are 20px</li>
            </ul>
            <li>border-width:10px 20px 30px;</li>
            <ul>
                <li>top border is 10px</li>
                <li>left and right borders are 20px</li>
                <li>bottom border is 30px</li>
            </ul>
            <li>border-width:10px 20px 30px 40px;</li>
            <ul>
                <li>top border is 10px</li>
                <li>right border is 20px</li>
                <li>bottom border is 30px</li>
                <li>left border is 40px</li>
            </ul>
        </ul>
        <p>
            Note you do not need to specify values for all fields in a compact rule. Just keep the space delimited list in the correct order. For example, you could specify several font values all at once: font: italic small-caps bold 1.3em "helvetica", sans-serif;  or, specify only a select couple. font: 1.3em "helvetica", sans-serif;
        </p>

        <h2 id="Advanced-Selectors">Advanced Selectors</h2>
        <h3>CSS Selectors</h3>
        <p>There are several <a href="css.maxdesign.com.au/selectutorial/">advanced CSS selector techniques</a> that provide plenty of options for the application of style.</p>
        <h3>Universal Selector</h3>
        <ul>
            <li>This is a fairly widely supported selector: the asterisk *</li>
            <li>Use it to specify a global rule</li>
            <li>* { color: red; } will make all font color red on your page</li>
            <li>The universal selector can be very powerful, as it can command a lot of changes to your styles,</li>
        </ul>
        <h3>Pseudo-classes</h3>
        <p>A Pseudo-class is a selector that allows you to reference a specific action or attribute of an element. This is most often used when specifying a attributes, such as <em>:visited</em> and <em>:link</em>.</p>
        <p>There are other uses for pseudo elements, that will allow for greater detail in styling content, such as <em>:first-letter</em> and <em>:first-line</em>. These allow the browser to apply a style based on an unselected, but displayed element.</p>
        <p>Best part: No <em>span </em>or <em>div</em>required to access these pseudo-elements.</p>

        <p>Within a pseudo-elements in particular, it's important to follow a certain order: </p>
        <ul>
            <li>a:link</li>
            <li>a:visited</li>
            <li>a:hover</li>
            <li>a:active</li>
        </ul>


        <p>Easy mnemonic: LVHA - LoVe - HAte. Because of the way that CSS applies rules, it looks at the LAST rule for a given element and applies more weight to it. For example, if you are hovering over a link, you don't want to see the link state
        </p>
        <ul>
            <li>There are several additional <a href="css.maxdesign.com.au/selectutorial/selectors_pseudo_class.htm">pseudo-classes</a> and <a href="css.maxdesign.com.au/selectutorial/selectors_pseudo_element.htm">pseudo-elements</a></li>
            <li><em>selector:before, selector:after</em> - add text content before or after the selector's content</li>
            <li><em>selector:first-line, selector:first-letter</em> - style the first line or letter of the selector</li>
            <li><em>selector:first-of-type, selector:last-of-type</em> - style the first or last tag of the selector type</li>
            <li><em>selector:nth-of-type(n) </em>- select the nth() tag of the same type as selector</li>
            <li><em>selector:nth-child(n) </em>- select the nth() child</li>
            <li><em>selector:nth-child(2n)</em> - select every even numbered child</li>
            <li><em>selector:nth-child(2n+1)</em> - select every odd numbered child</li>
        </ul>
        <h3>Descendant Selectors</h3>
        <ul>
            <li>Separated by a space, the last element is the one being styled</li>
            <li>h1 em will apply rules to all em's within an h1</li>
            <li>You can have as many as you want: ul ol ul li</li>
            <li>Great for specifying different styles when they apply only in certain areas</li>
            <li>#nav a { ... } will only apply these rules to Anchors within the div called nav</li>
            <li>Degree of separation can be infinite, so be careful</li>
            <li>p em will match ANY em that descends from a paragraph, no matter how nested</li>
        </ul>
        <h3>Child Selectors</h3>
        <ul>
            <li>Uses the > combinator to specify children</li>
            <li>Will select an element that is directly descended from another element</li>
            <li>p > strong will only select a strong tag that is inside a paragraph</li>
            <li>Will not select a strong tag embedded in any other tag (even if it is within a paragraph)</li>
        </ul>
        <h3>Adjacent Sibling Selectors
        </h3>
        <ul>
            <li>The + combinator specifies the first sibling tag following the root</li>
            <li>It will not include the root for styling</li>
            <li>div + h2 will select the first sibling h2 following a div tag</li>
        </ul>
        <h3>General Sibling Selectors
        </h3>
        <ul>
            <li>The ~ combinator specifies all siblings tags following the root</li>
            <li>It will not select sibling tags that precede the root, nor will it include the root</li>
            <li>h1 ~ h2 will select all sibling h2 tags that follow an h1</li>
        </ul>

        <h3>Attribute Selectors </h3>
        <ul>
            <li>You can also select elements by what the element contains</li>
            <li>The method is: element[attribute=value]</li>
            <li>If you specify an attribute with no value, you will match any element that simply has the attribute present (no matter what it's value is)</li>
            <li>p[align] {color: red;} will turn red any paragraph that contains an align attribute</li>
            <li>Similarly, img[alt] {border: 1pt red solid; } will draw a red line around all images with an alt attribute</li>
            <li>You can further direct the attribute selector to find content that is at the beginning (using the carat: ^), somewhere inside (using the asterisk: *) or end of a value (using the dollar sign: $)</li>
            <li>Attribute selector examples:</li>
            <ul>
                <li><em>img[alt]</em> - select all img tags that have alt attributes</li>
                <li><em>img[src="images/pic.jpg"]</em> - select img tags whose src is 'images/pic.jpg'</li>
                <li><em>img[src^="gallery/"]</em> - select all img tags whose src BEGINS with 'gallery/'</li>
                <li><em>img[src*="logo"]</em> - select all img tags whose src CONTAINS 'logo'</li>
                <li><em>img[src$=".png"]</em> - select all img tags whose src ENDS with '.png'</li>
            </ul>
        </ul>


        <h2 id="Rule-Specificity">Rule Specificity</h2>
        <h3>Rule Order &amp; Specificity</h3>
        <p>When a style declaration is found to be in conflict with a previously declared style, there is a method for determining which one will win out. The process is built into every web browser, and almost all of them calculate the values identically (for once!).</p>
        <p>Here is how the W3C defines the process by which style order is determined:</p>
        <ul>
            <li>Discover all declarations. Find all declarations that apply to the element and property in question, for the target media type. Declarations apply if the associated selector matches the element in question.</li>
            <li>Sheet Order. The primary sort of the declarations is by weight and origin: for normal declarations, author style sheets override user style sheets which override the default style sheet.</li>
            <ul>
                <li>Note: For "!important" declarations, user style sheets override author style sheets which override the default style sheet. "!important" declaration override normal declarations. An imported style sheet has the same origin as the style sheet that imported it.</li>
            </ul>
            <li><em>Specificity: </em>The secondary sort is by specificity of selector: more specific selectors will override more general ones. Pseudo-elements and pseudo-classes are counted as normal elements and classes, respectively.</li>
            <li><em>Sort by Order:</em> Finally, sort by order specified: if two rules have the same weight, origin and specificity, the latter specified wins. Rules in imported style sheets are considered to be before any rules in the style sheet itself.</li>
        </ul>
        <p>All of the rules are pretty straightforward, except for Specificity, which bears some explanation.</p>
        <p>Specificity is a method for determining what rules are applied when a conflict between two selectors occurs. Through a method of adding values when certain elements and selectors are present, a specificity number can be applied to any CSS rule. The one with highest specificity wins and the associated rule is applied to the element(s) in question.</p>


        <h3>Ruleset for Specificity</h3>
        <p>Style sheets can also override conflicting style sheets based on their level of specificity, where a more specific style will always win out over a less specific one. It is simply a counting game to calculate the specificity of a selector.</p>
        <ol>
            <li>Count the number of IDs in the selector.</li>
            <li>Count the number of CLASS, pseudoclass, and attribute selectors.</li>
            <li>Count the number of HTML tag names in the selector.</li>
        </ol>
        <p>Next, write the three numbers in exact order with no spaces or commas to obtain a three digit number. (Note, you may need to convert the numbers to a larger base to end up with three digits.) The final list of numbers corresponding to selectors will easily determine specificity with the higher numbers winning out over lower numbers. Following is a list of selectors sorted by specificity:</p>

        <ul>
            <li>#id1</li>
            <p class="code-p">
                <code>/* id=1 class=0 HTML=0 --> specificity = 100 */</code>
            </p>
            <li>UL UL LI.red</li>
            <p class="code-p">
                <code>/* id=0 class=1 HTML=3 --> specificity = 013 */</code>
            </p>
            <li>LI.red</li>
            <p class="code-p">
                <code>/* id=0 class=1 HTML=1 --> specificity = 011 */</code>
            </p>
            <li>LI</li>
            <p class="code-p">
                <code>/* id=0 class=0 HTML=1 --> specificity = 001 */</code>
            </p>
        </ul>

        <h3>!important rule</h3>
        <ul>
            <li>This declaration, when added to a rule, will override almost all other declarations, with no respect for specificity.</li>
            <li>It indicates that this rule should take over any previous rules that might govern a specific element.</li>
            <li>Example <em>.selector{ color:blue !important; }</em></li>
            <li>This rule can cause havoc if overused, as it will overrule any other declaration with the same selector. <em>Be careful with !important</em></li>
        </ul>


        <h2 id="To-Do">To Do</h2>
        <ul>
            <li>Download, review, and complete the homework assignment from <a href="https://learn.bcit.ca/">D2L</a></li>
            <li>Find a partner for your homework.</li>
            <li>Practice using <a href="bcitcomp.ca/1950/lecture/03/#advanced_selectors">advanced CSS selectors</a></li>
        </ul>
    </section>
    </article>
    </section>
    </main>
    <?php
    include './templates/footer.php';
?>

<?php
    $pageName = 'Day 2';
    include './templates/header.php';
    include './templates/agenda-header.php';
?>

    <ul>
        <li><a href="#charsets">Charsets</a></li>
        <li><a href="#html-xhtml-html5">HTML, XHTML, HTML5</a></li>
        <li><a href="#semantics">Semantics</a></li>
        <li><a href="#form-svg-multimedia">Forms, SVG, Multimedia</a></li>
        <li><a href="#to-do">To Do</a></li>
    </ul>
    </section>
    <section>
        <button onclick="topFunction()" id="BackToTopButton" title="Go to top">Top</button>

        <h2 id="charsets">Character Sets And Languages</h2>
        <p>The W3C recommends the <a href="https://www.w3.org/International/questions/qa-choosing-encodings">UTF-8 charset</a> for web development. It includes an impressive array of languages and special characters, and is well supported in common devices.</p>

        <h2>Assign Character Set</h2>
        <p>
            If it is not specified, a web browser will choose the character set it thinks is most appropriate, but it is a better practice for the developer to ensure the correct character set by applying the meta tag to the head section of every HTML page:
            <code>&lt;meta charset="utf-8" /&gt;</code>
        </p>
        <ul>
            <li>Write all your text-based code (.html, .css, .js, .php, etc) in UTF-8. At development time, ensure your text editor is saving files in this format. This setting is usually found in the application's Preferences menu option.</li>
            <li>Unless your audience includes very old browsers, you can <a href="https://tools.oratory.com/altcodes.html">code special characters</a> directly into the HTML (you dont need to use HTML entities for most special characters).</li>
            <li>You cannot copy-paste rich text (such as Microsoft Word, or WordPad) into your HTML. The rich text formatting may result in an unreadable mess.</li>
            <li>An HTTP server can over-ride your charset preferences when it generates the HTTP header. Details on how to control this will be discussed later in this course.</li>
        </ul>
        <h2 id="html-xhtml-html5">HTML lang Attribute</h2>
        <p>Use the lang="" attribute to <a href="https://www.w3.org/International/questions/qa-html-language-declarations">declare the language in HTML</a>. This is usually applied to the html element. Assigning the appropriate language code will apply to all contained content, unless over-ridden with another lang="".</p>
        <p>Use the language abbreviations from the <a href="www.loc.gov/standards/iso639-2/php/code_list.php">standard ISO 639-1</a> code set (don't use ISO 639-2).</p>
        <h3>HTML</h3>
        <p>What started as a language defined by <a href="www.w3.org/MarkUp/SGML/">SGML</a> (Standard Generalized Markup Language), HTML is used to mark up billions of pages, making up the bulk of the web.</p>
        <ul>
            <li>Late 1991, Tim Berners-Lee releases the first iteration of what would become HTML 2.0 (there was no real 1.0+)</li>
            <li>HTML was a language created at the dawn of the Web, using SGML (Standard Generalized Markup Language) as a template</li>
            <li>Over the next decade, various additions, improvements and changes are introduced</li>
            <li><a href="https://www.w3.org/TR/1999/REC-html401-19991224/">HTML 4.01</a> released in December 1999</li>
            <li>Initially used for documents and a place for the technically inclined, the web did not have the international pervasiveness it does today</li>
            <li>Most developers were new to the language and there were no real classes in it</li>
            <li>People had to learn as they went along</li>
            <li>A lot of early sites are poorly designed</li>
        </ul>
        <h3>
            <H3>HTML 4.01 template</H3>
        </h3>
        <p>The problem with the state of HTML then was its reputation as a loose language. Poorly structured code would be rendered differently across user agents, leading to forked code and less predictable results.</p>

        <h3> XHTML</h3>
        <p>The <a href="https://www.w3.org/TR/2002/REC-xhtml1-20020801/">XHTML specification</a> was the result of rewriting <a href="https://www.w3.org/TR/1999/REC-html401-19991224/">HTML</a> 4.01 using the ruleset derived from<a href="https://www.w3.org/XML/"> XML</a></p>
        <ul>
            <li>HTML 4.01 + XML = XHTML 1.0</li>
            <li>X = eXtensible</li>
            <li>X = XML related</li>
            <li>Better, more predictable coding patterns.</li>
            <li>Verifiable or "well-formed" code can be produced.</li>
            <li>Forces a higher standard of HTML.</li>
            <li>Predictable behavior across user agents.</li>
            <li>Porting to HTML5 is easy (if you also observe semantic guidelines).</li>
        </ul>

        <h3>XHTML Rules:</h3>
        <ul>
            <li>All elements must be properly nested</li>
            <ul>
                <li>
                    This is not valid: <code>&lt;p&gt;&lt;b&gt;Bolded Text&lt;/p&gt;&lt;/b&gt;</code>
                </li>
                <li>This can be a problem with things like Lists <code>&lt;ol&gt;</code> and <code>&lt;ul&gt;</code>.</li>
                <li>Especially when closing the List Item <code>&lt;li&gt;</code> tag that contains the <code>&lt;ul&gt;</code> or <code>&lt;ol&gt; </code>tag.</li>
            </ul>
            <li>All tags must close </li>
            <ul>
                <li>
                    Example: <code>&lt;p&gt;Some text here&lt;/p&gt;</code>
                </li>
                <li>
                    Empty Elements are closed as well: <code>&lt;br /&gt;</code> or <code>&lt;img src=&quot;#&quot; /&gt;</code>
                </li>
                <li>An extra space is required before the slash to work with all browsers.</li>
            </ul>
            <li>All tag names must be in lower case</li>
            <ul>
                <li><code>&lt;Img Src=&quot;some_image.gif&quot;&gt;</code> is not valid</li>
            </ul>

            <li>Attribute names are always in lower case</li>
            <ul>
                <li><code>&lt;p ALIGN=&quot;center&quot;&gt;&nbsp;</code>should be<code>&nbsp;&lt;p align=&quot;center&quot;&gt;</code></li>
            </ul>
            <li>All attributes must be quoted</li>

            <ul>
                <li><code>&lt;body bgcolor=black&gt;&nbsp;</code>will not work, you need:<code>&nbsp;&lt;body bgcolor=&quot;black&quot;&gt;</code></li>
            </ul>
            <li>Attributes cannot be minimized</li>
            <ul>
                <li><code>&lt;input type=&quot;checkbox&quot; checked&gt;&nbsp;</code>cannot be used. The valid code is:<code>&nbsp;&lt;input type=&quot;checkbox&quot; checked=&quot;checked&quot; /&gt;</code></li>
            </ul>
            <li>Name Attribute is no longer used (except with forms). Replace "name" with "id".</li>
            <ul>
                <li><code>&lt;img src=&quot;picture.gif&quot; name=&quot;myimage&quot; /&gt;&nbsp;</code>will not validate. Use<code>&nbsp;id=&quot;myimage&quot;&nbsp;</code>instead.</li>
            </ul>
            <li>Mandatory Elements: Every XHTML document must have these elements:</li>
            <ul>
                <li>
                    <code>            &lt;html&gt;</code>
                </li>
                <li>
                    <code>            &lt;head&gt;</code>
                </li>
                <li>
                    <code>            &lt;title&gt;</code>
                </li>
                <li>
                    <code>            &lt;body&gt;</code></li>
                <li>
                    <code>The &lt;!DOCTYPE&gt;</code> declaration must be there, but it is part of the document itself rather than an element of the document.</li>
            </ul>
            <li>Documents must be well-formed</li>
            <ul>
                <li>The document must conform to all of the above rules</li>
            </ul>
            <li>Optional XML declaration, not required, but <strong>good</strong> practice:</li>
            <p class="code-p">
                <code>&lt;?xml version=&quot;1.0&quot; encoding=&quot;ISO-8859-1&quot;?&gt;</code>
            </p>
            <li>
                Optional Element: An XHTML document should also declare the type and character encoding in the head section to ensure the server sends the correct content-type header:
            </li>
            <p class="code-p">
                <code>&lt;meta http-equiv=&quot;Content-Type&quot; <br />
                            content=&quot;text/html&quot; charset=&quot;UTF-8&quot;&gt;</code>
            </p>
        </ul>
        <h3>XHTML 1.0 template</h3>
        <h3>HTML5</h3>
        <p>As of October 28, 2014, <a href="www.w3.org/TR/html5/">HTML5 is the official W3C recommendation</a> HTML5 is more evolutionary then revolutionary. The bulk of previous HTML elements and attributes are maintained, with a few deprecations, and several additions. Significant features include:</p>
        <ul>
            <li>Ultra simple Doctype: <code>&lt;!DOCTYPE html&gt;</code></li>
            <li>Specifies how browsers should behave with imperfect code</li>
            <li>Ability to embed <a href="https://www.w3.org/XML/">XML</a>, <a href="www.w3.org/Math/">MathML</a> or <a href="www.w3.org/Graphics/SVG/">SVG</a> markup.</li>
            <li>Standardized Javascript API increases client side script compatibility across browsers</li>
            <li>Backwards compatible - older versions of HTML can effectively be updated by simply changing the doctype to HTML5</li>
            <li>Guiding principles: Enhance semantic coding, Support existing content, Pave the cowpaths</li>
        </ul>
        <h3>HTML 5 template</h3>
        <h3>Paving the Cowpaths</h3>
        <p>Common developer practices have been simplified</p>
        <ul>
            <li>Finally a DOCTYPE we can all remember:<code>&lt;!DOCTYPE html&gt;</code></li>
            <li>
                Declaring the character encoding is easier:<code>&lt;meta charset="utf-8"&gt;</code>
            </li>
            <li>
                When linking to external stylesheets the type attribute is not required:<code>&lt;link rel="stylesheet" href="style.css" /&gt;</code>
            </li>
            <li>
                When embedding CSS the type attribute is not required:<code>&lt;style&gt;&lt;/style&gt;</code>
            </li>
            <li>
                Including javascripts is simplified as well (type attribute is not required)<code>&lt;script src="javascripts.js"&gt;&lt;/script&gt;</code>
            </li>
        </ul>

        <h3 id="semantics"> HTML5: Enhanced Semantic Coding</h3>
        <p>It is crucial for all HTML content to be semantically marked up. This is how browsers, search engines, and screen readers make sense of online content. HTML5 provides more than just adjustments to the markup, there are new, powerfully semantic elements:</p>
        <ul>
            <li><a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/section"><code>&lt;section&gt;</code></a> is a tag representing a document or application section. in general, if you are planning to use a heading, start a new section. a section must contain a heading, and may contain article(s), possibly asides or even sub-sections</li>
            <li><a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/article"><code>&lt;article&gt;</code></a> is an independent piece of content in a document (it could stand alone if removed from the page). an article might be a blog post, forum thread, news story, collection of product information, etc</li>
            <li><a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/aside"><code>&lt;aside&gt;</code></a> is for content "only slightly" related to the main page content. asides fill the role of a sidebar. if the content could be removed without reducing the meaning of the main content of the HTML document, then use an aside</li>
            <li><a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/header"><code>&lt;header&gt;</code></a> and <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/footer"><code>&lt;footer&gt;</code></a> are for the header or footer of a page</li>
            <li><a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/nav"><code>&lt;nav&gt;</code></a> represents an area for navigation</li>
            <li><a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/main"><code>&lt;main&gt;</code></a> used for containing content that is focused on the central topic of the page. this content is usually unique to the page, and not shared by other pages (main will usually NOT contain navigations, footers, sidebars, etc)</li>
            <li><a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/figure"><code>&lt;figure&gt;</code> </a>will likely contain an img or graphic. self-contained content (could usually be removed from the page and stand on its own). allows for captioning of embedded content like an image graphic or video. if you want to associate a caption, add a figcaption child</li>
            <li><a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/figcaption"><code>&lt;figcaption&gt;</code></a> used as first or last child of figure to define the caption or legend for a figure</li>
        </ul>
        <p>These represent some big changes in HTML, allowing for more flexibility in coding and specifying content. Many of these will replace and reduce the need for many div tags. eg: instead of the typical
            <code>&lt;div id="header"&gt;</code>, use
            <code>&lt;heade&gt;</code>.
            <br />Having trouble deciding which tag to use for what content? Try this <a href="html5doctor.com/downloads/h5d-sectioning-flowchart.pdf">HTML5 flowchart</a>.
        </p>
        <h3>HTML5 Semantic Alterations </h3>
        <p>HTML5 also brings a few notable semantic alterations to older tags: </p>
        <ul>
            <li><a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/a"><code>&lt;a&gt;</code></a> though still an inline tag, it is now ok to nest multiple block level tags (headings, paragraphs etc) inside an anchor tag</li>
            <li><a href="https://developer.mozilla.org/en/docs/Web/HTML/Element/small"><code>&lt;small&gt;</code></a> no longer a 'physical' tag for smaller sized print, it now has semantic value: meaning 'small print', i.e. 'legalese'. the big element has been deprecated</li>
            <li>
                <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/b"><code>&lt;b&gt;</code></a> no longer means 'render bold'. now it means the text is 'stylisticly offset from the normal text', without conveying any extra importance. to convey extra importance, use <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/strong"><code>&lt;strong&gt;</code></a>
            </li>
            <li>
                <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/i"><code>&lt;i&gt;</code></a> now means the text is 'in an alternate voice or mood', without conveying any extra emphasis. to convey extra emphasis, use <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/em"><code>&lt;em&gt;</code></a>
            </li>
            <li>Deprecated tags: <strong><code>&lt;big&gt;</code>, <code>&lt;font&gt;</code>, <code>&lt;strike&gt;</code></strong>, and a few more. Developers should use CSS instead of these deprecated tags.</li>
            <li>Deprecated attributes: <strong>align, bgcolor, border, height, size, type, width</strong> and more. Developers should use CSS instead of these deprecated attributes.</li>
        </ul>
        <h3>HTML5 Content Models </h3>
        <p>Pre-HTML5, there were basically two categories of tags: inline and block. HTML5 intoduces a more nuanced set of categories that allow for greater semantic sectioning of content. The content model will help the browser to determine the semantics of your content.</p>
        <h3>Content Models</h3>
        <ul>
            <li>text-level content: most inline tags</li>
            <li>grouping content: most block tags</li>
            <li>replaced content: all the form widgets and related tags</li>
            <li>embedded content: video, audio, canvas</li>
            <li>sectioning content: new structural, semantic options</li>
        </ul>
        <h3>Sectioning Content</h3>
        <p>The &lt;section&gt; tag can be used to semantically group content. It can remove ambiguity when a page is being processed by the browser, a screen reader, or search engine.</p>
        <p>For example, imagine you have created the following code:</p>
        <p>Since content that follows a heading is presumed to be associated with that heading, the code above carries plenty of semantic value already. But, if the small tag's content is intended to apply to all cities, a browser has no way of knowing that. It will instead assume the small tag is associated with the preceding heading (<code>&lt;h3&gt;Tokyo&lt;/h3&gt;</code>)</p>
        <p>Use the section tag to explicitly demarcate the start and end of the related content:</p>
        <p>
            This new sectioning will inform the browser that the <strong>small</strong> is associated with the <strong>h1</strong>
        </p>
        <p>In HTML5, each piece of sectioned content has its own self-contained outline. This means you wont need to worry as much about which level heading tag to use. You can use an <strong>h1</strong> inside a section and it will be treated as the heading of the section, and have lesser semantic impact than an <strong>h1</strong> that is at a higher level.</p>


        <h3 id="form-svg-multimedia">Forms</h3>
        <p>HTML 5 adds several new <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input">form attributes</a> that prove quite useful, even if some are as yet poorly supported.</p>
        <ul>
            <li><strong>placeholder="value"</strong>: prepopulates field with data</li>
            <li><strong>autofocus="autofocus"</strong>: sets the input to have cursor focus</li>
            <li><strong>required="required"</strong>: ensures field is filled in before submission</li>
            <li>There are also several new <code>&lt;input&gt;</code> type attribute variants:</li>
            <ul>
                <li><strong>type="email"</strong>: checkes for the pattern of emails</li>
                <li><strong>type="url"</strong>: web addesses</li>
                <li><strong>type="date"</strong>: calendar popup</li>
                <li><strong>type="tel"</strong>: telephone numbers</li>
                <li><strong>type="search"</strong>: formats text input as search input</li>
                <li><strong>type="color"</strong>: color picker popup</li>
                <li><strong>type="range"</strong>: sliding scales</li>
                <li><strong>type="pattern"</strong>: regular expression pattern matching</li>
            </ul>
        </ul>

        <h3>Scaleable Vector Graphics</h3>
        <p><a href="www.w3.org/Graphics/SVG/">Scaleable Vector Graphics (SVG)</a> can be embedded into HTML5 documents. SVG are 100% scalable without the pixelated effect that scaled raster images can suffer from. SVG file data is stored as text, so they are much smaller in file size than a raster equivalent.</p>
        <p>You can use SVG graphics with the img tag, just as with raster graphics. You can also use .svg as a CSS background-image.</p>

        <p class="code-p"> <code>&lt;img src="images/logo.svg" alt="COMP 1950 logo" /&gt;</code> </p>
        <p>The <strong>png</strong> on the left is 26KB. The <strong>.svg</strong> on the right is only 4KB.
        </p>
        <p>
            Alternatively, you can use SVG code 'inline' with the <strong>svg</strong> tag. The advantage of doing this is it will result in one less request/response between the client and the server. The disadvantage to inline SVG is that it adds considerable clutter to your your .html code. Just copy the source code from your <strong>.svg</strong> file and paste it directly into your <strong>.html</strong>!
            <br />
        </p>
        <p class="code-p">
            <code>&lt;svg viewBox="0 0 55 28"&gt;<br />
                            &lt;!-- svg code goes here... sometimes there is a LOT of code here! --&gt;<br />
                            &lt;/svg&gt;</code>
        </p>
        <h3>SVG Tools</h3>
        <p>Use an SVG application to help you create and manipulate your SVG code.</p>
        <ul>
            <li>Adobe Illustrator</li>
            <li>Inkscape (Open source, Windows/Mac/Linux)</li>
        </ul>
        <h3>Multimedia</h3>
        <p>HTML5's more responsive multimedia features have made it easier to provide appropriately formatted video and audio to the client.</p>
        <h3>Audio</h3>
        <p>The <a href="https://developer.mozilla.org/en/docs/Web/HTML/Element/audio">audio</a> element provides a way to offer many audio formats to the client, allowing the browser to choose the one most suitable.</p>
        <p>The most common audio formats for the web are:
            <string>audio/mp3</string>, <strong>audio/mpeg</strong> and <strong>audio/ogg</strong>.
        </p>


        <strong>Each audio tag may contain:</strong>
        <ul>
            <li><strong>source</strong> tags as children of the <strong>audio</strong> tag, one for each audio format available. Each <strong>source</strong> must have a <strong>src</strong> (path to audio file) and <strong>type</strong> (audio file MIME type)</li>
            <li><strong>controls="controls"</strong> give the user control over the audio *important for usability*</li>
            <li><strong>loop="loop"</strong> loop audio playback</li>
            <li><strong>preload="none"</strong> dont load the audio until the user clicks 'play', preload="metadata" preloads the clip duration statistic only, preload="auto" loads the audio clip to the client before they click 'play'</li>
            <li><strong>autoplay="autoplay"</strong> begin playing audio as soon as page is loaded *NOT very user friendly*</li>
            <li>you may also wish to include a direct link for your users to download the file</li>
            <p class="code-p"><code>&lt;audio controls="controls"&gt; <br />
                            &lt;source src="media/house-a-square.mpg" type="audio/mpeg" /&gt;<br />
                            &lt;source src="media/house-a-square.mp3" type="audio/mp3" /&gt;<br />
                            &lt;source src="media/house-a-square.ogg" type="audio/ogg" /&gt;<br />
                        &lt;/audio&gt;</code>
                <br />
                <a href="bcitcomp.ca/1950/media/house-a-square.mp3">Download the audio</a>
            </p>
        </ul>



        <h3>Video</h3>
        <p>The <a href="https://developer.mozilla.org/en/docs/Web/HTML/Element/video">video</a> element provides a way to offer many video formats to the client, allowing the browser to choose the one most suitable.</p>
        <p>The most common video formats for the web are: <strong>video/mp4</strong>, <strong>video/ogg</strong> and <strong>video/webm</strong>.</p>


        <strong>Each video tag may contain:</strong>
        <ul>
            <li><strong>source</strong> tags as children of the video tag, one for each video format available. Each source must have a src (path to video file) and type (video file MIME type)</li>
            <li><strong>controls="controls"</strong> give the user control over the video playback *important for usability*</li>
            <li><strong>width="250" height="100"</strong> set the size of the video (use CSS instead. absolute values only, no percentages)</li>
            <li><strong>poster="image.jpg"</strong> display a static image when the video is not playing</li>
            <li><strong>loop="loop"</strong> loop playback</li>
            <li><strong>muted="muted"</strong> begin with audio silenced</li>
            <li><strong>preload="none"</strong> dont load the video until the user clicks 'play', <strong>preload="metadata"</strong> preloads the clip duration statistic only, <strong>preload="auto"</strong> loads the clip to the client before they click 'play'</li>
            <li><strong>autoplay="autoplay"</strong> begin playing video as soon as page is loaded *NOT very user friendly*</li>
            <li>you may also wish to include a direct link for your users to download the file</li>
            <p class="code-p">
                <code>&lt;video preload="none" controls="controls" <br />
                                        poster="media/poster-bear-in-water.jpg"&gt;<br />
                                         &lt;source src="media/bear-in-water.webm" type="video/webm" /&gt; <br />
                                        &lt;source src="media/bear-in-water.mp4" type="video/mp4" /&gt;<br />
                                         &lt;source src="media/bear-in-water.ogg" type="video/ogg" /&gt; <br />
                        &lt;/video&gt;</code>
                <br />
                <a href="bcitcomp.ca/1950/media/bear-in-water.mp4">Download the vidio</a>
            </p>
        </ul>




        <h3>HTML5 Today</h3>
        <p>User agent browsers will have varying support for the HTML5 specification.</p>
        <ul>
            <li><a href="https://caniuse.com/">caniuse.com</a> is an excellent source for compatibility testing</li>
            <li>Try the <a href="html5test.com/">HTML5Test</a> to test a specific browser.</li>
            <li>To ensure early versions of Internet Explorer will render HTML5 tags correctly, you can add the HTML5 shiv:</li>
            <p class="code-p"><code>&lt;script&gt;document.createElement("article");&lt;/script&gt;</code></p>
            <li>This creates an element called &lt;article&gt; which the browser (IE, in this case) can understand and style appropriately</li>
            <li>Creating an entry for every element can get a bit heavy, so you can use the <a href="https://github.com/aFarkas/html5shiv">HTML5shiv </a>script written by <a href="remysharp.com/">Remy Sharp</a>. Insert a coded-comment that will apply the shiv ONLY with IE browsers earlier than version 9:</li>
            <p class="code-p">
                <code>&lt;!--[if lt IE 9]&gt; <br />
                            &lt;script src="http://html5shiv.googlecode.com/svn/trunk/html5.js" &gt;<br />
                            &lt;/script&gt; <br />
                            &lt;![endif]--&gt;
                        </code>
            </p>

            <li>
                Since HTML5 understands both HTML4 and XHTML tags, converting an older HTML file into HTML5 is simply a matter of updating the DOCTYPE and meta tag for charset.
            </li>
        </ul>

        <h3 id="to-do">To Do</h3>
        <ul>
            <li>Download, review, and complete the homework assignment from <a href="https://learn.bcit.ca/">D2L</a></li>
            <li>Review the <a href="bcitcomp.ca/1950/lecture/02/#semantics">HTML5 semantic tags</a>, know how and when to use them to maxmize the semantic strucure of your HTML</li>
        </ul>


    </section>
    </article>
    </section>
    </main>
    <?php
    include './templates/footer.php';
?>

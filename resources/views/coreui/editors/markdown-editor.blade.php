@extends('coreui.base')

@section('css')
    <link href="{{ asset('css/codemirror.css') }}" rel="stylesheet">
@endsection

@section('content')

          <div class="container-fluid">
            <div class="animated fade-in">
              <div class="card">
                <div class="card-header">
                  Markdown editor - CodeMirror
                  <a href="https://coreui.io/pro/" class="badge badge-danger">CoreUI Pro Component</a>
                  <div class="card-header-actions">
                    <a href="http://codemirror.net" class="card-header-action" target="_blank"><small class="text-muted">docs</small></a>
                  </div>
                </div>
                <!-- Create code editor container -->
                <textarea id="codemirror" style="display: none;">Markdown: Basics
================

&lt;ul id="ProjectSubmenu"&gt;
    &lt;li&gt;&lt;a href="/projects/markdown/" title="Markdown Project Page"&gt;Main&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class="selected" title="Markdown Basics"&gt;Basics&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="/projects/markdown/syntax" title="Markdown Syntax Documentation"&gt;Syntax&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="/projects/markdown/license" title="Pricing and License Information"&gt;License&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="/projects/markdown/dingus" title="Online Markdown Web Form"&gt;Dingus&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;


Getting the Gist of Markdown's Formatting Syntax
------------------------------------------------

This page offers a brief overview of what it's like to use Markdown.
The [syntax page] [s] provides complete, detailed documentation for
every feature, but Markdown should be very easy to pick up simply by
looking at a few examples of it in action. The examples on this page
are written in a before/after style, showing example syntax and the
HTML output produced by Markdown.

It's also helpful to simply try Markdown out; the [Dingus] [d] is a
web application that allows you type your own Markdown-formatted text
and translate it to XHTML.

**Note:** This document is itself written using Markdown; you
can [see the source for it by adding '.text' to the URL] [src].

  [s]: /projects/markdown/syntax  "Markdown Syntax"
  [d]: /projects/markdown/dingus  "Markdown Dingus"
  [src]: /projects/markdown/basics.text


## Paragraphs, Headers, Blockquotes ##

A paragraph is simply one or more consecutive lines of text, separated
by one or more blank lines. (A blank line is any line that looks like
a blank line -- a line containing nothing but spaces or tabs is
considered blank.) Normal paragraphs should not be indented with
spaces or tabs.

Markdown offers two styles of headers: *Setext* and *atx*.
Setext-style headers for `&lt;h1&gt;` and `&lt;h2&gt;` are created by
"underlining" with equal signs (`=`) and hyphens (`-`), respectively.
To create an atx-style header, you put 1-6 hash marks (`#`) at the
beginning of the line -- the number of hashes equals the resulting
HTML header level.

Blockquotes are indicated using email-style '`&gt;`' angle brackets.

Markdown:

    A First Level Header
    ====================

    A Second Level Header
    ---------------------

    Now is the time for all good men to come to
    the aid of their country. This is just a
    regular paragraph.

    The quick brown fox jumped over the lazy
    dog's back.

    ### Header 3

    &gt; This is a blockquote.
    &gt;
    &gt; This is the second paragraph in the blockquote.
    &gt;
    &gt; ## This is an H2 in a blockquote


Output:

    &lt;h1&gt;A First Level Header&lt;/h1&gt;

    &lt;h2&gt;A Second Level Header&lt;/h2&gt;

    &lt;p&gt;Now is the time for all good men to come to
    the aid of their country. This is just a
    regular paragraph.&lt;/p&gt;

    &lt;p&gt;The quick brown fox jumped over the lazy
    dog's back.&lt;/p&gt;

    &lt;h3&gt;Header 3&lt;/h3&gt;

    &lt;blockquote&gt;
        &lt;p&gt;This is a blockquote.&lt;/p&gt;

        &lt;p&gt;This is the second paragraph in the blockquote.&lt;/p&gt;

        &lt;h2&gt;This is an H2 in a blockquote&lt;/h2&gt;
    &lt;/blockquote&gt;



### Phrase Emphasis ###

Markdown uses asterisks and underscores to indicate spans of emphasis.

Markdown:

    Some of these words *are emphasized*.
    Some of these words _are emphasized also_.

    Use two asterisks for **strong emphasis**.
    Or, if you prefer, __use two underscores instead__.

Output:

    &lt;p&gt;Some of these words &lt;em&gt;are emphasized&lt;/em&gt;.
    Some of these words &lt;em&gt;are emphasized also&lt;/em&gt;.&lt;/p&gt;

    &lt;p&gt;Use two asterisks for &lt;strong&gt;strong emphasis&lt;/strong&gt;.
    Or, if you prefer, &lt;strong&gt;use two underscores instead&lt;/strong&gt;.&lt;/p&gt;



## Lists ##

Unordered (bulleted) lists use asterisks, pluses, and hyphens (`*`,
`+`, and `-`) as list markers. These three markers are
interchangable; this:

    *   Candy.
    *   Gum.
    *   Booze.

this:

    +   Candy.
    +   Gum.
    +   Booze.

and this:

    -   Candy.
    -   Gum.
    -   Booze.

all produce the same output:

    &lt;ul&gt;
    &lt;li&gt;Candy.&lt;/li&gt;
    &lt;li&gt;Gum.&lt;/li&gt;
    &lt;li&gt;Booze.&lt;/li&gt;
    &lt;/ul&gt;

Ordered (numbered) lists use regular numbers, followed by periods, as
list markers:

    1.  Red
    2.  Green
    3.  Blue

Output:

    &lt;ol&gt;
    &lt;li&gt;Red&lt;/li&gt;
    &lt;li&gt;Green&lt;/li&gt;
    &lt;li&gt;Blue&lt;/li&gt;
    &lt;/ol&gt;

If you put blank lines between items, you'll get `&lt;p&gt;` tags for the
list item text. You can create multi-paragraph list items by indenting
the paragraphs by 4 spaces or 1 tab:

    *   A list item.

        With multiple paragraphs.

    *   Another item in the list.

Output:

    &lt;ul&gt;
    &lt;li&gt;&lt;p&gt;A list item.&lt;/p&gt;
    &lt;p&gt;With multiple paragraphs.&lt;/p&gt;&lt;/li&gt;
    &lt;li&gt;&lt;p&gt;Another item in the list.&lt;/p&gt;&lt;/li&gt;
    &lt;/ul&gt;



### Links ###

Markdown supports two styles for creating links: *inline* and
*reference*. With both styles, you use square brackets to delimit the
text you want to turn into a link.

Inline-style links use parentheses immediately after the link text.
For example:

    This is an [example link](http://example.com/).

Output:

    &lt;p&gt;This is an &lt;a href="http://example.com/"&gt;
    example link&lt;/a&gt;.&lt;/p&gt;

Optionally, you may include a title attribute in the parentheses:

    This is an [example link](http://example.com/ "With a Title").

Output:

    &lt;p&gt;This is an &lt;a href="http://example.com/" title="With a Title"&gt;
    example link&lt;/a&gt;.&lt;/p&gt;

Reference-style links allow you to refer to your links by names, which
you define elsewhere in your document:

    I get 10 times more traffic from [Google][1] than from
    [Yahoo][2] or [MSN][3].

    [1]: http://google.com/        "Google"
    [2]: http://search.yahoo.com/  "Yahoo Search"
    [3]: http://search.msn.com/    "MSN Search"

Output:

    &lt;p&gt;I get 10 times more traffic from &lt;a href="http://google.com/"
    title="Google"&gt;Google&lt;/a&gt; than from &lt;a href="http://search.yahoo.com/"
    title="Yahoo Search"&gt;Yahoo&lt;/a&gt; or &lt;a href="http://search.msn.com/"
    title="MSN Search"&gt;MSN&lt;/a&gt;.&lt;/p&gt;

The title attribute is optional. Link names may contain letters,
numbers and spaces, but are *not* case sensitive:

    I start my morning with a cup of coffee and
    [The New York Times][NY Times].

    [ny times]: http://www.nytimes.com/

Output:

    &lt;p&gt;I start my morning with a cup of coffee and
    &lt;a href="http://www.nytimes.com/"&gt;The New York Times&lt;/a&gt;.&lt;/p&gt;


### Images ###

Image syntax is very much like link syntax.

Inline (titles are optional):

    ![alt text](/path/to/img.jpg "Title")

Reference-style:

    ![alt text][id]

    [id]: /path/to/img.jpg "Title"

Both of the above examples produce the same output:

    &lt;img src="/path/to/img.jpg" alt="alt text" title="Title" /&gt;



### Code ###

In a regular paragraph, you can create code span by wrapping text in
backtick quotes. Any ampersands (`&amp;`) and angle brackets (`&lt;` or
`&gt;`) will automatically be translated into HTML entities. This makes
it easy to use Markdown to write about HTML example code:

    I strongly recommend against using any `&lt;blink&gt;` tags.

    I wish SmartyPants used named entities like `&amp;mdash;`
    instead of decimal-encoded entites like `&amp;#8212;`.

Output:

    &lt;p&gt;I strongly recommend against using any
    &lt;code&gt;&amp;lt;blink&amp;gt;&lt;/code&gt; tags.&lt;/p&gt;

    &lt;p&gt;I wish SmartyPants used named entities like
    &lt;code&gt;&amp;amp;mdash;&lt;/code&gt; instead of decimal-encoded
    entites like &lt;code&gt;&amp;amp;#8212;&lt;/code&gt;.&lt;/p&gt;


To specify an entire block of pre-formatted code, indent every line of
the block by 4 spaces or 1 tab. Just like with code spans, `&amp;`, `&lt;`,
and `&gt;` characters will be escaped automatically.

Markdown:

    If you want your page to validate under XHTML 1.0 Strict,
    you've got to put paragraph tags in your blockquotes:

        &lt;blockquote&gt;
            &lt;p&gt;For example.&lt;/p&gt;
        &lt;/blockquote&gt;

Output:

    &lt;p&gt;If you want your page to validate under XHTML 1.0 Strict,
    you've got to put paragraph tags in your blockquotes:&lt;/p&gt;

    &lt;pre&gt;&lt;code&gt;&amp;lt;blockquote&amp;gt;
        &amp;lt;p&amp;gt;For example.&amp;lt;/p&amp;gt;
    &amp;lt;/blockquote&amp;gt;
    &lt;/code&gt;&lt;/pre&gt;

## Fenced code blocks (and syntax highlighting)

```javascript
for (var i = 0; i &lt; items.length; i++) {
    console.log(items[i], i); // log them
}
```

    </textarea>
              </div>
            </div>

          </div>

@endsection

@section('javascript')
    <script src="{{ asset('js/codemirror.js') }}"></script>
    <script src="{{ asset('js/markdown.js') }}"></script>
    <script src="{{ asset('js/markdown-editor.js') }}"></script>
@endsection

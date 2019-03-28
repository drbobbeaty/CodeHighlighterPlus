CodeHighlighterPlus
===================

## Introduction

I have been using WordPress for a personal blog for many years. Before that,
everything was in a PostgreSQL database with journaling software I wrote
myself. Before that it was static HTML pages. This is going back to _before_
Y2K. But one thing that I always wanted in the journal was a nice syntax
highlighter.
[CodeHighlighter](http://wordpress.org/extend/plugins/code-highlighter/) was
_nearly_ perfect.

This is a slight _fork_ of that becauce it also fixes some problems in
[GeSHI](http://qbnz.com/highlighter/) as well. Also, the original
[CodeHighlighter](http://wordpress.org/extend/plugins/code-highlighter/) is
evidently not on GitHub. So I've started this project, and it's something
that I'll maintain as needed - pulling in [GeSHI](http://qbnz.com/highlighter/)
changes and adding things as I need them.

## Installation

At the current time, the only way to install the plugin is to place it in your
WodPress' `/wp-content/plugins/` directory. The easiest way to do this is to
simple clone this repo in that directory:
```bash
  $ cd blog/wp-content/plugins/
  $ git clone https://github.com/drbobbeaty/CodeHighlighterPlus.git
```
at this point, the plugin will be available, but not active - activate it on
the WordPress admin console.

From now on, you can get updates to this plugin with a simmple:
```bash
  $ cd blog/wp-content/plugins/CodeHighlighterPlus
  $ git pull
```
and it's up to date. This makes it easy to _control_ the updates, and not have
themm automatically done.

## Usage

Once the plugin is activated, adding a highlighted code snippet to a post is
pretty simple. You simply encase the code in the `pre` tag, and add in two
optional attributes: `lang` and `lineno`.

For example, if I wanted to put the commands for updating the plugin into a
post I would write:
```html
<pre lang="bash">
  $ cd blog/wp-content/plugins/CodeHighlighterPlus
  $ git pull
</pre>
```
and if I needed to include line numbers, that would be as easy as:
```html
<pre lang="bash" lineno="433">
    /**
     * Line number styles
     * @var string
     */
    protected $line_style1 = 'font-weight: normal; vertical-align:top;';
</pre>
```

## Supported Languages

As of the current version of this plugin, the languages that are supported
are:
```
4cs            e              magiksf        qml
6502acme       ecmascript     make           racket
6502kickass    eiffel         mapbasic       rails
6502tasm       email          mathematica    rbs
68000devpac    epc            matlab         rebol
abap           erlang         mercury        reg
actionscript   euphoria       metapost       rexx
actionscript3  ezt            mirc           robots
ada            f1             mk-61          rpmspec
aimms          falcon         mmix           rsplus
algol68        fo             modula2        ruby
apache         fortran        modula3        rust
applescript    freebasic      mpasm          sas
apt_sources    freeswitch     mxml           sass
arm            fsharp         mysql          scala
asm            gambas         nagios         scheme
asp            gdb            netrexx        scilab
asymptote      genero         newlisp        scl
autoconf       genie          nginx          sdlbasic
autohotkey     gettext        nimrod         smalltalk
autoit         glsl           nsis           smarty
avisynth       gml            oberon2        spark
awk            gnuplot        objc           sparql
bascomavr      go             objeck         sql
bash           groovy         ocaml-brief    standardml
basic4gl       gwbasic        ocaml          stonescript
batch          haskell        octave         swift
bf             haxe           oobas          systemverilog
biblatex       hicest         oorexx         tcl
bibtex         hq9plus        oracle11       tclegg
blitzbasic     html4strict    oracle8        teraterm
bnf            html5          oxygene        texgraph
boo            icon           oz             text
c              idl            parasail       thinbasic
c_loadrunner   ini            parigp         tsql
c_mac          inno           pascal         twig
c_winapi       intercal       pcre           typoscript
caddcl         io             per            unicon
cadlisp        ispfpanel      perl           upc
ceylon         j              perl6          urbi
cfdg           java           pf             uscript
cfm            java5          phix           vala
chaiscript     javascript     php-brief      vb
chapel         jcl            php            vbnet
cil            jquery         pic16          vbscript
clojure        julia          pike           vedit
cmake          julia.bak      pixelbender    verilog
cobol          kixtart        pli            vhdl
coffeescript   klonec         plsql          vim
cpp-qt         klonecpp       postgresql     visualfoxpro
cpp-winapi     kotlin         postscript     visualprolog
cpp            latex          povray         whitespace
csharp         lb             powerbuilder   whois
css            ldif           powershell     winbatch
cuesheet       lisp           proftpd        xbasic
d              llvm           progress       xml
dart           locobasic      prolog         xojo
dcl            logtalk        properties     xorg_conf
dcpu16         lolcode        providex       xpp
dcs            lotusformulas  purebasic      xyscript
delphi         lotusscript    pycon          yaml
diff           lscript        pys60          z80
div            lsl2           python         zxbasic
dos            lua            q
dot            m68k           qbasic
```

## License

	Copyright 2012, 2019 by Robert E. Beaty

	Permission is hereby granted, free of charge, to any person obtaining
	a copy of this software and associated documentation files (the "Software"),
	to deal in the Software without restriction, including without limitation
	the rights to use, copy, modify, merge, publish, distribute, sublicense,
	and/or sell copies of the Software, and to permit persons to whom the
	Software is furnished to do so, subject to the following conditions:

	The above copyright notice and this permission notice shall be included
	in all copies or substantial portions of the Software.

	THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS
	OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
	FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL
	THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
	LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
	FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER
	DEALINGS IN THE SOFTWARE.

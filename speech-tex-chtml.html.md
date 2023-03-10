# [speech-tex-chtml.html](https://mathjax.github.io/MathJax-demos-web/speech-tex-chtml.html)

This example shows how to cause speech strings to be attached to the typeset math so that screen readers can read the math.

The key lines are

``` html
  <script>
  MathJax = {
    loader: {load: ['a11y/semantic-enrich']},
    options: {
      sre: {
        speech: 'shallow'  // one of: 'deep', 'shallow', or 'none'
      },
      renderActions: {
        //
        // Force speech enrichment regardless of the menu settings
        //
        enrich: {'[+]': [
          function (doc) {doc.enrich(true)},
          function (math, doc) {math.enrich(doc, true)}  
        ]}
      }
    }
  };
  </script>
  <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-chtml.js"></script>
```

which causes the `a11y/semantic-enrich` extension to be loaded, and modifies the enrich action to force the enrichment regardless of the settings in the contextual menu.  The output jax will pick up on the speech text that is generated by the extension and create the proper tags and attributes for it to be picked up by screen readers.

[Run the example](https://mathjax.github.io/MathJax-demos-web/speech-tex-chtml.html)

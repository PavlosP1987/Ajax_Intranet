Ajax On Intranets

Summary:
This module converts internal links to ajax requests that return the rendered node. All attached JS and CSS of the requested node are also added and executed.

How it works:
Getting a rendered version of nodes is a more complicated task in D8 than D7. Also, capturing all attached JS and CSS is a daunting task.  This module uses D8 Core's bare page renderer to get the rendered HTML and fully aggregated JS + CSS scripts.  The module converts internal links into ajax requests. These ajax requests return a rendered version of the node + jss requirements + css requirements. It loads the data into a temporary iframe and then replaces the original page's main content region with the returned rendered html. The CSS is appended to the head tag.  The js files are appended to the footer.  Duplicate files replace existing ones.

Installation:
Enable module


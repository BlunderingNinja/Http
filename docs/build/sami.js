
window.projectVersion = 'master';

(function(root) {

    var bhIndex = null;
    var rootPath = '';
    var treeHtml = '        <ul>                <li data-name="namespace:BlunderingNinja" class="opened">                    <div style="padding-left:0px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="BlunderingNinja.html">BlunderingNinja</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="namespace:BlunderingNinja_Http" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="BlunderingNinja/Http.html">Http</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="namespace:BlunderingNinja_Http_Parameters" >                    <div style="padding-left:36px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="BlunderingNinja/Http/Parameters.html">Parameters</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:BlunderingNinja_Http_Parameters_Files" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="BlunderingNinja/Http/Parameters/Files.html">Files</a>                    </div>                </li>                            <li data-name="class:BlunderingNinja_Http_Parameters_Parameters" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="BlunderingNinja/Http/Parameters/Parameters.html">Parameters</a>                    </div>                </li>                            <li data-name="class:BlunderingNinja_Http_Parameters_ServerParameters" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="BlunderingNinja/Http/Parameters/ServerParameters.html">ServerParameters</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="class:BlunderingNinja_Http_File" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="BlunderingNinja/Http/File.html">File</a>                    </div>                </li>                            <li data-name="class:BlunderingNinja_Http_FileFactory" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="BlunderingNinja/Http/FileFactory.html">FileFactory</a>                    </div>                </li>                            <li data-name="class:BlunderingNinja_Http_Request" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="BlunderingNinja/Http/Request.html">Request</a>                    </div>                </li>                            <li data-name="class:BlunderingNinja_Http_Response" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="BlunderingNinja/Http/Response.html">Response</a>                    </div>                </li>                </ul></div>                </li>                </ul></div>                </li>                </ul>';

    var searchTypeClasses = {
        'Namespace': 'label-default',
        'Class': 'label-info',
        'Interface': 'label-primary',
        'Trait': 'label-success',
        'Method': 'label-danger',
        '_': 'label-warning'
    };

    var searchIndex = [
                    
            {"type": "Namespace", "link": "BlunderingNinja.html", "name": "BlunderingNinja", "doc": "Namespace BlunderingNinja"},{"type": "Namespace", "link": "BlunderingNinja/Http.html", "name": "BlunderingNinja\\Http", "doc": "Namespace BlunderingNinja\\Http"},{"type": "Namespace", "link": "BlunderingNinja/Http/Parameters.html", "name": "BlunderingNinja\\Http\\Parameters", "doc": "Namespace BlunderingNinja\\Http\\Parameters"},
            
            {"type": "Class", "fromName": "BlunderingNinja\\Http", "fromLink": "BlunderingNinja/Http.html", "link": "BlunderingNinja/Http/File.html", "name": "BlunderingNinja\\Http\\File", "doc": "&quot;This class represents and uploaded file.&quot;"},
                                                        {"type": "Method", "fromName": "BlunderingNinja\\Http\\File", "fromLink": "BlunderingNinja/Http/File.html", "link": "BlunderingNinja/Http/File.html#method___construct", "name": "BlunderingNinja\\Http\\File::__construct", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "BlunderingNinja\\Http\\File", "fromLink": "BlunderingNinja/Http/File.html", "link": "BlunderingNinja/Http/File.html#method___get", "name": "BlunderingNinja\\Http\\File::__get", "doc": "&quot;Returns the value of the property call if it exists in $fileData&quot;"},
                    {"type": "Method", "fromName": "BlunderingNinja\\Http\\File", "fromLink": "BlunderingNinja/Http/File.html", "link": "BlunderingNinja/Http/File.html#method_save", "name": "BlunderingNinja\\Http\\File::save", "doc": "&quot;Save the uploaded file to permanent storage.&quot;"},
            
            {"type": "Class", "fromName": "BlunderingNinja\\Http", "fromLink": "BlunderingNinja/Http.html", "link": "BlunderingNinja/Http/FileFactory.html", "name": "BlunderingNinja\\Http\\FileFactory", "doc": "&quot;The purpose of this clase is to generate file objects.&quot;"},
                                                        {"type": "Method", "fromName": "BlunderingNinja\\Http\\FileFactory", "fromLink": "BlunderingNinja/Http/FileFactory.html", "link": "BlunderingNinja/Http/FileFactory.html#method_makeFile", "name": "BlunderingNinja\\Http\\FileFactory::makeFile", "doc": "&quot;Return a file object representing an uploaded file.&quot;"},
            
            {"type": "Class", "fromName": "BlunderingNinja\\Http\\Parameters", "fromLink": "BlunderingNinja/Http/Parameters.html", "link": "BlunderingNinja/Http/Parameters/Files.html", "name": "BlunderingNinja\\Http\\Parameters\\Files", "doc": "&quot;A class to represent all the uploaded files to the server. Returns the file object as a parameter.&quot;"},
                                                        {"type": "Method", "fromName": "BlunderingNinja\\Http\\Parameters\\Files", "fromLink": "BlunderingNinja/Http/Parameters/Files.html", "link": "BlunderingNinja/Http/Parameters/Files.html#method___construct", "name": "BlunderingNinja\\Http\\Parameters\\Files::__construct", "doc": "&quot;Builds the class.&quot;"},
            
            {"type": "Class", "fromName": "BlunderingNinja\\Http\\Parameters", "fromLink": "BlunderingNinja/Http/Parameters.html", "link": "BlunderingNinja/Http/Parameters/Parameters.html", "name": "BlunderingNinja\\Http\\Parameters\\Parameters", "doc": "&quot;This class contains and distributes the parameters with a request. Get, Post, Cookie, etc.&quot;"},
                                                        {"type": "Method", "fromName": "BlunderingNinja\\Http\\Parameters\\Parameters", "fromLink": "BlunderingNinja/Http/Parameters/Parameters.html", "link": "BlunderingNinja/Http/Parameters/Parameters.html#method___construct", "name": "BlunderingNinja\\Http\\Parameters\\Parameters::__construct", "doc": "&quot;Construct Function&quot;"},
                    {"type": "Method", "fromName": "BlunderingNinja\\Http\\Parameters\\Parameters", "fromLink": "BlunderingNinja/Http/Parameters/Parameters.html", "link": "BlunderingNinja/Http/Parameters/Parameters.html#method___get", "name": "BlunderingNinja\\Http\\Parameters\\Parameters::__get", "doc": "&quot;Get the parameter by key.&quot;"},
                    {"type": "Method", "fromName": "BlunderingNinja\\Http\\Parameters\\Parameters", "fromLink": "BlunderingNinja/Http/Parameters/Parameters.html", "link": "BlunderingNinja/Http/Parameters/Parameters.html#method_all", "name": "BlunderingNinja\\Http\\Parameters\\Parameters::all", "doc": "&quot;Returns all parameter in an associative array.&quot;"},
                    {"type": "Method", "fromName": "BlunderingNinja\\Http\\Parameters\\Parameters", "fromLink": "BlunderingNinja/Http/Parameters/Parameters.html", "link": "BlunderingNinja/Http/Parameters/Parameters.html#method_count", "name": "BlunderingNinja\\Http\\Parameters\\Parameters::count", "doc": "&quot;Returns the number of parameters&quot;"},
                    {"type": "Method", "fromName": "BlunderingNinja\\Http\\Parameters\\Parameters", "fromLink": "BlunderingNinja/Http/Parameters/Parameters.html", "link": "BlunderingNinja/Http/Parameters/Parameters.html#method_get", "name": "BlunderingNinja\\Http\\Parameters\\Parameters::get", "doc": "&quot;Returns the value of the parameter it is passed as an argument.&quot;"},
            
            {"type": "Class", "fromName": "BlunderingNinja\\Http\\Parameters", "fromLink": "BlunderingNinja/Http/Parameters.html", "link": "BlunderingNinja/Http/Parameters/ServerParameters.html", "name": "BlunderingNinja\\Http\\Parameters\\ServerParameters", "doc": "&quot;This class represents the parameters contained in the $_SERVER super global.&quot;"},
                                                        {"type": "Method", "fromName": "BlunderingNinja\\Http\\Parameters\\ServerParameters", "fromLink": "BlunderingNinja/Http/Parameters/ServerParameters.html", "link": "BlunderingNinja/Http/Parameters/ServerParameters.html#method___get", "name": "BlunderingNinja\\Http\\Parameters\\ServerParameters::__get", "doc": "&quot;Get the parameter by key. Key is the camel case version of the $_SERVER key.&quot;"},
                    {"type": "Method", "fromName": "BlunderingNinja\\Http\\Parameters\\ServerParameters", "fromLink": "BlunderingNinja/Http/Parameters/ServerParameters.html", "link": "BlunderingNinja/Http/Parameters/ServerParameters.html#method_camelCaseToDashedCaps", "name": "BlunderingNinja\\Http\\Parameters\\ServerParameters::camelCaseToDashedCaps", "doc": "&quot;Takes a camel case string and converts it to all caps with dashes.&quot;"},
            
            {"type": "Class", "fromName": "BlunderingNinja\\Http", "fromLink": "BlunderingNinja/Http.html", "link": "BlunderingNinja/Http/Request.html", "name": "BlunderingNinja\\Http\\Request", "doc": "&quot;Gathers and contains the http request.&quot;"},
                                                        {"type": "Method", "fromName": "BlunderingNinja\\Http\\Request", "fromLink": "BlunderingNinja/Http/Request.html", "link": "BlunderingNinja/Http/Request.html#method___construct", "name": "BlunderingNinja\\Http\\Request::__construct", "doc": "&quot;Builds the class.&quot;"},
                    {"type": "Method", "fromName": "BlunderingNinja\\Http\\Request", "fromLink": "BlunderingNinja/Http/Request.html", "link": "BlunderingNinja/Http/Request.html#method_cookies", "name": "BlunderingNinja\\Http\\Request::cookies", "doc": "&quot;Gets the cookies sent in the request.&quot;"},
                    {"type": "Method", "fromName": "BlunderingNinja\\Http\\Request", "fromLink": "BlunderingNinja/Http/Request.html", "link": "BlunderingNinja/Http/Request.html#method_files", "name": "BlunderingNinja\\Http\\Request::files", "doc": "&quot;Gets the files sent in teh request.&quot;"},
                    {"type": "Method", "fromName": "BlunderingNinja\\Http\\Request", "fromLink": "BlunderingNinja/Http/Request.html", "link": "BlunderingNinja/Http/Request.html#method_get", "name": "BlunderingNinja\\Http\\Request::get", "doc": "&quot;Gets the parameters sent via the GET method.&quot;"},
                    {"type": "Method", "fromName": "BlunderingNinja\\Http\\Request", "fromLink": "BlunderingNinja/Http/Request.html", "link": "BlunderingNinja/Http/Request.html#method_post", "name": "BlunderingNinja\\Http\\Request::post", "doc": "&quot;Gets the parameters sent via the POST method.&quot;"},
                    {"type": "Method", "fromName": "BlunderingNinja\\Http\\Request", "fromLink": "BlunderingNinja/Http/Request.html", "link": "BlunderingNinja/Http/Request.html#method_server", "name": "BlunderingNinja\\Http\\Request::server", "doc": "&quot;Gets the server and remote host parameters.&quot;"},
            
            {"type": "Class", "fromName": "BlunderingNinja\\Http", "fromLink": "BlunderingNinja/Http.html", "link": "BlunderingNinja/Http/Response.html", "name": "BlunderingNinja\\Http\\Response", "doc": "&quot;Crafts and sends an http response to the client.&quot;"},
                                                        {"type": "Method", "fromName": "BlunderingNinja\\Http\\Response", "fromLink": "BlunderingNinja/Http/Response.html", "link": "BlunderingNinja/Http/Response.html#method_setCookie", "name": "BlunderingNinja\\Http\\Response::setCookie", "doc": "&quot;Sets a cookie.&quot;"},
                    {"type": "Method", "fromName": "BlunderingNinja\\Http\\Response", "fromLink": "BlunderingNinja/Http/Response.html", "link": "BlunderingNinja/Http/Response.html#method_setHeader", "name": "BlunderingNinja\\Http\\Response::setHeader", "doc": "&quot;Sets a raw header.&quot;"},
                    {"type": "Method", "fromName": "BlunderingNinja\\Http\\Response", "fromLink": "BlunderingNinja/Http/Response.html", "link": "BlunderingNinja/Http/Response.html#method_setResponceCode", "name": "BlunderingNinja\\Http\\Response::setResponceCode", "doc": "&quot;Sets the http response code.&quot;"},
                    {"type": "Method", "fromName": "BlunderingNinja\\Http\\Response", "fromLink": "BlunderingNinja/Http/Response.html", "link": "BlunderingNinja/Http/Response.html#method_setBody", "name": "BlunderingNinja\\Http\\Response::setBody", "doc": "&quot;Prepare the body that will be returned to the client.&quot;"},
                    {"type": "Method", "fromName": "BlunderingNinja\\Http\\Response", "fromLink": "BlunderingNinja/Http/Response.html", "link": "BlunderingNinja/Http/Response.html#method_returnResponse", "name": "BlunderingNinja\\Http\\Response::returnResponse", "doc": "&quot;Returns\/echos the body to the client. Should be last thing called.&quot;"},
                    {"type": "Method", "fromName": "BlunderingNinja\\Http\\Response", "fromLink": "BlunderingNinja/Http/Response.html", "link": "BlunderingNinja/Http/Response.html#method_redirect", "name": "BlunderingNinja\\Http\\Response::redirect", "doc": "&quot;Redirect the client to a new location. Must be called before any other content\/white space is sent to client.&quot;"},
            
            
                                        // Fix trailing commas in the index
        {}
    ];

    /** Tokenizes strings by namespaces and functions */
    function tokenizer(term) {
        if (!term) {
            return [];
        }

        var tokens = [term];
        var meth = term.indexOf('::');

        // Split tokens into methods if "::" is found.
        if (meth > -1) {
            tokens.push(term.substr(meth + 2));
            term = term.substr(0, meth - 2);
        }

        // Split by namespace or fake namespace.
        if (term.indexOf('\\') > -1) {
            tokens = tokens.concat(term.split('\\'));
        } else if (term.indexOf('_') > 0) {
            tokens = tokens.concat(term.split('_'));
        }

        // Merge in splitting the string by case and return
        tokens = tokens.concat(term.match(/(([A-Z]?[^A-Z]*)|([a-z]?[^a-z]*))/g).slice(0,-1));

        return tokens;
    };

    root.Sami = {
        /**
         * Cleans the provided term. If no term is provided, then one is
         * grabbed from the query string "search" parameter.
         */
        cleanSearchTerm: function(term) {
            // Grab from the query string
            if (typeof term === 'undefined') {
                var name = 'search';
                var regex = new RegExp("[\\?&]" + name + "=([^&#]*)");
                var results = regex.exec(location.search);
                if (results === null) {
                    return null;
                }
                term = decodeURIComponent(results[1].replace(/\+/g, " "));
            }

            return term.replace(/<(?:.|\n)*?>/gm, '');
        },

        /** Searches through the index for a given term */
        search: function(term) {
            // Create a new search index if needed
            if (!bhIndex) {
                bhIndex = new Bloodhound({
                    limit: 500,
                    local: searchIndex,
                    datumTokenizer: function (d) {
                        return tokenizer(d.name);
                    },
                    queryTokenizer: Bloodhound.tokenizers.whitespace
                });
                bhIndex.initialize();
            }

            results = [];
            bhIndex.get(term, function(matches) {
                results = matches;
            });

            if (!rootPath) {
                return results;
            }

            // Fix the element links based on the current page depth.
            return $.map(results, function(ele) {
                if (ele.link.indexOf('..') > -1) {
                    return ele;
                }
                ele.link = rootPath + ele.link;
                if (ele.fromLink) {
                    ele.fromLink = rootPath + ele.fromLink;
                }
                return ele;
            });
        },

        /** Get a search class for a specific type */
        getSearchClass: function(type) {
            return searchTypeClasses[type] || searchTypeClasses['_'];
        },

        /** Add the left-nav tree to the site */
        injectApiTree: function(ele) {
            ele.html(treeHtml);
        }
    };

    $(function() {
        // Modify the HTML to work correctly based on the current depth
        rootPath = $('body').attr('data-root-path');
        treeHtml = treeHtml.replace(/href="/g, 'href="' + rootPath);
        Sami.injectApiTree($('#api-tree'));
    });

    return root.Sami;
})(window);

$(function() {

    // Enable the version switcher
    $('#version-switcher').change(function() {
        window.location = $(this).val()
    });

    
        // Toggle left-nav divs on click
        $('#api-tree .hd span').click(function() {
            $(this).parent().parent().toggleClass('opened');
        });

        // Expand the parent namespaces of the current page.
        var expected = $('body').attr('data-name');

        if (expected) {
            // Open the currently selected node and its parents.
            var container = $('#api-tree');
            var node = $('#api-tree li[data-name="' + expected + '"]');
            // Node might not be found when simulating namespaces
            if (node.length > 0) {
                node.addClass('active').addClass('opened');
                node.parents('li').addClass('opened');
                var scrollPos = node.offset().top - container.offset().top + container.scrollTop();
                // Position the item nearer to the top of the screen.
                scrollPos -= 200;
                container.scrollTop(scrollPos);
            }
        }

    
    
        var form = $('#search-form .typeahead');
        form.typeahead({
            hint: true,
            highlight: true,
            minLength: 1
        }, {
            name: 'search',
            displayKey: 'name',
            source: function (q, cb) {
                cb(Sami.search(q));
            }
        });

        // The selection is direct-linked when the user selects a suggestion.
        form.on('typeahead:selected', function(e, suggestion) {
            window.location = suggestion.link;
        });

        // The form is submitted when the user hits enter.
        form.keypress(function (e) {
            if (e.which == 13) {
                $('#search-form').submit();
                return true;
            }
        });

    
});



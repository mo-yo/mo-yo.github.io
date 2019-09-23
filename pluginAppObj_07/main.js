function decode_html(encoded) {
    encoded = replaceAll("&amp;gt;", ">", encoded);
    encoded = replaceAll("&amp;lt;", "<", encoded);
    encoded = replaceAll("\\\'", "\'", encoded);
    encoded = replaceAll("&quot;", "\"", encoded);
    encoded = replaceAll("&lt;br /&gt;", "\n", encoded);
    encoded = replaceAll("&amp;", "&", encoded);
    encoded = replaceAll("\\\\", "\\", encoded);
    return encoded;
}

function replaceAll(find, replace, str) {
    return str.replace(new RegExp(find, 'g'), replace);
}

function icons8_pluginAppObj_07() {
    
    function decode_html(encoded) {
    encoded = replaceAll("&amp;gt;", ">", encoded);
    encoded = replaceAll("&amp;lt;", "<", encoded);
    encoded = replaceAll("\\\'", "\'", encoded);
    encoded = replaceAll("&quot;", "\"", encoded);
    encoded = replaceAll("&lt;br /&gt;", "\n", encoded);
    encoded = replaceAll("&amp;", "&", encoded);
    encoded = replaceAll("\\\\", "\\", encoded);
    return encoded;
}

function replaceAll(find, replace, str) {
    return str.replace(new RegExp(find, 'g'), replace);
}
    function getClassIcon(){   
        var fileName = "icons8-add_shopping_cart.png";
        fileName = replaceAll("_","-", fileName);

        return fileName.replace(".png",""); 
    }
       
    $(document).ready(function(){
         
        var link = $(".pluginAppObj_07_child");
        var icon = $("#pluginAppObj_07_icon");
        $(icon).removeClass().addClass(getClassIcon());
        //$(icon).removeClass().addClass("icons8-add-shopping-cart");
       
        switch("none") {
            case "grow":
                $(link).addClass("grow");
                break;
            case "shrink":
                 $(link).addClass("shrink");
                break;
            case "shake":
                 $(link).addClass("shake");
                break;
            case "float":
                 $(link).addClass("float");
                break;
        }
    });
}

function wpfront_scroll_top_init() {
if(typeof wpfront_scroll_top == "function" && typeof jQuery !== "undefined")
{wpfront_scroll_top({"scroll_offset":100,"button_width":0,"button_height":0,"button_opacity":0.8,"button_fade_duration":400,"scroll_duration":400,"location":1,"marginX":10,"marginY":30,"hide_iframe":"on","auto_hide":false,"auto_hide_after":2,"button_action":"top","button_action_element_selector":"","button_action_container_selector":"html, body","button_action_element_offset":0});
} else {
    setTimeout(wpfront_scroll_top_init, 100);}}

    wpfront_scroll_top_init();

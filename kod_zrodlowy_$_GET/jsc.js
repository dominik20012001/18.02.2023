window.onload = fix_heights;
var MIN_CONTENT_HEIGHT = 400;
function fix_heights()
{
    heightOfContent = get_content_height();
    if (heightOfContent < MIN_CONTENT_HEIGHT)
    {        
        set_content_height(MIN_CONTENT_HEIGHT);   
        heightOfContent = get_content_height();
    }
    fix_menu_height(heightOfContent);
}
function fix_menu_height(heightOfContent)
{    
    document.getElementById("menu").style.height = heightOfContent+'px';   
}
function set_content_height(heightOfContent)
{
    document.getElementById("text").style.height = heightOfContent+'px';
}
function get_content_height()
{
    browserName=navigator.appName;    
    heightOfContent = "";
    if (browserName == "Microsoft Internet Explorer")
        heightOfContent = document.getElementById("text").offsetHeight;
    else        
        heightOfContent = document.getElementById("text").clientHeight;    
        
    return heightOfContent;
}

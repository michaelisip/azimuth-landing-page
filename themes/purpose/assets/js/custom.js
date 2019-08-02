function googleTranslateElementInit() {
new google.translate.TranslateElement( {
        pageLanguage: 'en',
        includedLanguages: 'en,es,tl'
    }, 'google_translate_element');

    /*
    To remove the "powered by google",
    */
    
    $('.goog-logo-link').css('display', 'none');
    $('.goog-te-gadget').css('font-size', '0');
}

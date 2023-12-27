new MultiSelectTag('countries', {
    rounded: true,    
    placeholder: 'Search',  
    onChange: function(values) {
        console.log(values)
    }
})
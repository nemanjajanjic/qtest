const {registerBlockType} = wp.blocks;

registerBlockType('moviesadd/block-favorite-movie-quote', {
    // built-in attributes
    title: 'Favorite movie quote',
    description: 'Block to generate Favorite movie quote',
    icon: 'format-image',
    category: 'text',
    // cutom attributes
    attributes: {}
    // custom functions


    // built-in-functions
    edit() {
        // JSX
        return <div>Favorite Movie</div>;
    },
    //
    // save() {}

})
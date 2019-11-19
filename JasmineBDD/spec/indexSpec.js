const SocialNetwork = require( "../src/index.js" );

describe( "Posting", function(){
    it('should return content and author name as key', function () {
        expect( SocialNetwork.posting( "marry", "I love coding" ) ).toEqual( { post_owner: "marry", content: "I love coding" } )
    });

} );
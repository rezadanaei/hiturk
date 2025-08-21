
export default class RenderPath {
    constructor($path) {
        this.path = $path;
    }
    
    
}


// * → all files and folders in the same level
// */ → all folders in the same level
// *. → all files that have an extension
// *.js , *.css → all files with a specific extension (JavaScript, CSS, etc.)
// style.* → any file named "style" with any extension
// /**/ → all folders in any depth
// /** → all files and folders in any depth
// /**. → all files in any depth that have an extension
// **/*.js → all .js files in any depth
// **/file.js → a specific file in any depth
// */file.js → a specific file in direct subfolders
// ./ → current directory
// ../ → one directory up

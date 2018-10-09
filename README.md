# Silver Tagging API Prototype

This prototype is used to test out the tagging system and information architecture that may be used within Silver.

## API Routes
| Route | Description |
|------|------|
| /api/guidelines | Returns all guidelines |
| /api/guidelines/{{number}} | Returns a single guideline |
| /api/methods | Returns all methods |
| /api/methods/{{number}} | Returns a single method |
| /api/categories | Returns all tag categories |
| /api/categories/{{number}} | Returns a single category |
| /api/tags | Returns all tags |
| /api/tags/{{number}} | Returns a single tag |
| /api/categoryTags/{{number}} | returns all tags from a single category
| /api/guidelineMethods/{{number}} | returns a list of all methods to fulfil a single guideline
| /api methodGuidelines/{{number}} | returns a list of guidelines that a single method fulfils

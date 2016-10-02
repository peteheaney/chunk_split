# Chunk Split

Chunk Split is an ExpressionEngine plugin that splits a string into chunks. It is essentially a wrapper for the native PHP `chunk_split` function.

## Installation

Copy the `chunk_split` folder to `system/expressionengine/third_party` on your server.

## Usage

`{exp:chunk_split:split string="1234567890123456" length="4" end=" "}`

#### Parameters

`string` The string to be split

`length` The length of each chunk

`end` The line ending sequence (what goes between each chunk)

The example tag above would output "1234 5678 9012 3456".

## License

AnyLink is released under the MIT license. For more information, see [License](https://github.com/peteheaney/anylink/blob/master/LICENSE).

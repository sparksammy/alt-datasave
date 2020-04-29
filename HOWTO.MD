# Example of ROBLOX LUA saving in alt-datasave.
data = "Hello, world!"
name = "example"
--data = HttpService:JSONEncode(data) --needed for tables, uncomment if data is a table
datstorePostAlt = HttpService:PostAsync("https://sparksammmy-home.000webhostapp.com/datasave.php?name=", "name=" .. name .. "&data=" .. data, Enum.HttpContentType.TextPlain)
print(datstorePostAlt) --print response

# Example of ROBLOX LUA loading in alt-datasave
name = "example"
datstoreGet = HttpService:PostAsync("https://sparksammmy-home.000webhostapp.com/" .. map, "sample text", Enum.HttpContentType.TextPlain)
--datstoreGet = HttpService:JSONDecode(datstoreGetAlt) --only needed for tables, uncomment if data is a table
print(name)

# Note
Apperently this is against 000webhost's TOS and I didn't know it, so maybe self-host it...

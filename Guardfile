# More info at https://github.com/guard/guard#readme


# Auto-compile Sass

guard 'sass',
:input => 'a/sass',
:output => 'a/css',
:compass => false,
:load_paths => ['a/sass/partials']


# Reload the browser when assets change

guard 'livereload' do
	watch(%r{.+\.(css|html|php|js)$})
end


# Compress JavaScript

# guard :jammit,
# :config_path => "assets.yml",
# :output_folder => "." do
	# watch(%r{(?:_css|_js)(/.+)\.(?:css|js)}) { |m| m[0] unless m[1] =~ /\/\./ }
# end
generate-classes: clear-generated
	mkdir generated/
	protoc --proto_path=resources/messages --php_out=generated/ resources/messages/api_v2.proto
	protoc --proto_path=resources/messages --php_out=generated/ resources/messages/messages.proto
	protoc --proto_path=resources/messages --php_out=generated/ resources/messages/spec.proto
	$(MAKE) dump-autoloader

clear-generated:
	-rm -rf generated/

dump-autoloader:
	composer dump --optimize

VERSION=0.1

package: dist-setup
	fpm -s dir \
	-f \
	-n smallscripts \
	-v $(VERSION) \
	--license BSD-2-Clause \
	-m $(EMAIL) \
	--url "https://github.com/rwhogg/smallScripts" \
	--description "Assorted scripts that I've found useful over time." \
	-t deb usr;

dist-setup:
	cp README.txt usr/share/doc/smallscripts/;

clean:
	rm *.deb;

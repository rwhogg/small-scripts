VERSION=0.1

package:
	fpm -s dir \
	-n smallscripts \
	-v $(VERSION) \
	--license BSD-2-Clause \
	-m $(EMAIL) \
	--url "https://github.com/rwhogg/smallScripts" \
	--description "Assorted scripts that I've found useful over time." \
	-t deb usr;

clean:
	rm *.deb;

VERSION=0.2

package:
	fpm -s dir \
	-f \
	-n smallscripts \
	-v $(VERSION) \
	--license BSD-2-Clause \
	-m $(EMAIL) \
	--depends php5 \
	--depends libreoffice \
	--depends csh \
	--depends ghostscript \
	--url "https://github.com/rwhogg/smallScripts" \
	--description "Assorted scripts that I've found useful over time." \
	-t deb usr;

clean:
	rm *.deb;

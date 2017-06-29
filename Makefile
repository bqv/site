DEPS = pages/*

all: index beta

.PHONY: index beta clean

index: index.html
beta: beta.html

%.html: %.php $(DEPS)
	php $< > .tmp.$@
	vulcanize --inline -s -p . .tmp.$@ -o $@

clean:
	rm -f index.html beta.html
	rm -f .tmp.*

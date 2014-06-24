OCAMLC=ocamlopt
#-I $(INCLUDES) 
# Important: order is important, i.e. 1st module shouldn't depend on any other.
BINARIES=generate_program
PACKAGES = -package unix -package str

all: $(BINARIES)
	$(OCAMLC) -c util.ml

generate_program: generate_program.ml util.ml
	ocamlfind ${OCAMLC} util.ml generate_program.ml ${PACKAGES} -linkpkg -o generate_program


clean:
	rm -f *.cmx *.cmi *.cmo *.o $(BINARIES)

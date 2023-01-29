.POSIX:

diapos.pdf: diapos.md
	pandoc -t beamer $< -o $@

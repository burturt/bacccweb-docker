# baccc competition docker images by alec
- By default container is a regular nginx + php dockerfile. Does not properly deal with IP logs by default; must set up docker networking properly to use
	- In site.conf, remove the commented out lines at top to enable using header as IP if proxy is in front (i.e. Cloud Run)
# web1 Recon
- Flags are hidden at various locations
- directory traversal exploit exists, very limited and can only view contents of files they are allowed to
# web2 Looking Glass
- Exploit is command injection. Users shouldn't be able to modify files, but there is no guarentee. Possible abuse.
# web2 Looking Glass Offline
- Commands outputs are faked. Allows running the machine on offline systems.
# Ansible Role: Nginx Includes

Installs reusable include files to be used with Nginx for RHEL/CentOS or Debian/Ubuntu.

## Requirements

Nginx installed through jdauphant.nginx role.

## Role Variables

    nginx_includes_path: "/etc/nginx/includes"

The directory inside which Certbot will be cloned.

    nginx_includes_extra: {}

Extra includes to be created through ansible config. Ie.

    nginx_includes_extra:
      - notfound: "return 404"


## Dependencies

jdauphant.nginx - https://github.com/jdauphant/ansible-role-nginx

## Example Playbook

    - hosts: servers
      roles:
        - druidfi.nginx-includes

After installation, you can include these files in nginx config like:

    nginx_sites:
      ssl_terminator:
        - listen 443 ssl
        - server_name mydomain.com
        - location / {
            proxy_pass  http://127.0.0.1:88;
            include includes/varnish-ssl-proxy.conf
          }

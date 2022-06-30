k8s_yaml('k8s/blue.yaml')
k8s_resource(workload='blue-workload', port_forwards=8080)
docker_build('blue', '.', build_args = { 'COLOR' : 'blue' }, live_update=[ sync('./www/', '/var/www/html/') ])

k8s_yaml('k8s/green.yaml')
k8s_resource(workload='green-workload', port_forwards=8081)
docker_build('green', '.', build_args = { 'COLOR' : 'green' }, live_update=[ sync('./www/', '/var/www/html/') ])

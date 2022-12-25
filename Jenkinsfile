pipeline {
    stages {
        stage('Clone repository') {
            steps {
                git branch: 'dev', url: 'https://github.com/kichukowa/WEB.git'
            }
        }

        stage('Delete the old image and container') {
            sh'''
            docker container stop my-project
            docker container rm my-project
            docker image rm my-project
            '''
        }

        stage('Create the image and run the container') {
            sh'''
            docker build -t my-project .
            docker run -p 80:80 my-project
            '''
        }
}
}

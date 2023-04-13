# this.sh repo_name tag_prefix
# tag format prefix_datetime

if [ $# -ne 2 ]; then
        echo "illegal number of parameters."
        exit 1
fi

REPONAME=$1
TAGPREFIX=$2
LEN_TAGPREFIX=${#TAGPREFIX}

CURRENT_MONTH="$(date +'%Y%m')"
echo "Current date: ${CURRENT_MONTH}"

for imagetag in $(aws ecr list-images --repository-name ${REPONAME} --query "imageIds[].[imageTag]" --output text);
do
        tagdate="${imagetag:${LEN_TAGPREFIX}:6}"
        echo "Tag:$imagetag, ${tagdate}"
        if [ ${#CURRENT_MONTH} -eq ${#tagdate} ] && [ "${CURRENT_MONTH}" -ne "${tagdate}"  ]; then
                echo "    delete ${imagetag}"
                aws ecr batch-delete-image --repository-name ${REPONAME} --image-ids imageTag=${imagetag}
        else
                echo "    skip ${imagetag}"
        fi
done

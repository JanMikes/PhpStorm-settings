#set($METHOD_NAME = ${NAME})
#set($METHOD_NAME = $METHOD_NAME.substring(0,1).toLowerCase() + $METHOD_NAME.substring(1))
public ${STATIC} function ${METHOD_NAME}()#if(${RETURN_TYPE}): ${RETURN_TYPE}#else#end
{
#if (${STATIC} == "static")
    return self::$${FIELD_NAME};
#else
    return $this->${FIELD_NAME};
#end
}
